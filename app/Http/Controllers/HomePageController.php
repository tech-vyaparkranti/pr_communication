<?php

namespace App\Http\Controllers;

use App\Models\GalleryItem;
use App\Models\WebSiteElements;
use App\Models\BrandPortfolio;
use App\Models\NavMenu;
use App\Models\BrandAssociation;
use App\Models\ClientTestimonial;
use App\Models\BrandService;
use App\Models\OverView;
use App\Traits\CommonFunctions;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;

class HomePageController extends Controller
{
    use CommonFunctions;
    
    public function homePage(Request $request){
        try{
            $elements = WebSiteElements::where('status','1')->get();
            $elementData = $elements->pluck('element_details', 'element')->toArray();
            $brandAssociation = BrandAssociation::where('status',1)->orderBy('updated_at','desc')->first();
            $brandPortfolio = BrandPortfolio::where("status",1)->get();
            $clientTestimonial = ClientTestimonial::where("status","1")->get();
            $overView = OverView::where("status",1)->get();
            $overView_Video = OverView::where("status",1)->select('video_link')->orderBy("updated_at",'desc')->first();
            return view("HomePage.dynamicHomePage",compact('elementData','brandAssociation','brandPortfolio','clientTestimonial','overView' ,'overView_Video'));
        }catch(Exception $exception){
            echo $exception->getMessage();
            return false;
        }

    }
    public function aboutUs(){
        return view("HomePage.aboutUs");
    }
    public function termsConditions(){
        return view("HomePage.termsConditions");
    }
    public function shippingDeliverypolicy(){
        return view("HomePage.shippingDeliverypolicy");
    }
    public function CancellationRefundPolicy(){
        return view("HomePage.CancellationRefundPolicy");
    }
    public function privacyPolicy(){
        return view("HomePage.privacyPolicy");
    }
    public function product(){
        // $data["destinations"] = (new DestinationController)->allDestinations();
        return view("HomePage.product");
    }

    public function productBrand($slug)
    {
        $brand = BrandPortfolio::where('slug',$slug)->first();
        $serviceData = BrandService::where(["brand_id"=>$brand->id ,'status'=> 1])->with("brand")->get();
        $brandName = $brand->title;
        $bannerImage = $brand->banner_image;
        $description = $brand->description;
       $metaTitle = preg_replace('/\s+/', ' ', trim($brand->meta_title ?? $brand->title));
        $metaDescription = preg_replace('/\s+/', ' ', trim($brand->meta_description ?? substr(strip_tags($brand->description), 0, 160)));
        return view("HomePage.brandServices" ,compact('serviceData','brandName','bannerImage','description', 'metaTitle', 'metaDescription'));
    }

    public function galleryPages(){
        $galleries = GalleryItem::where('status',1)->get();
        $category = BrandPortfolio::where("status",1)->get();
        // dd($galleries);
        return view("HomePage.galleryPages",compact('galleries','category'));
    }
    public function contactUs(){
        return view("HomePage.contactUs");
    }
    public function tostem(){
        return view("HomePage.tostem");
    }
    public function greenlam(){
        return view("HomePage.greenlam");
    }
    public function sloan(){
        return view("HomePage.sloan");
    }
    public function vox(){
        return view("HomePage.vox");
    }
    public function ComingSoon(){
        return view("HomePage.ComingSoon");
    }

    public function getMenu(){
        $menuItems = NavMenu::where([
            [NavMenu::STATUS,1],
            [NavMenu::VIEW_IN_LIST,NavMenu::VIEW_IN_LIST_YES]])
        ->select(NavMenu::TITLE,NavMenu::URL,NavMenu::URL_TARGET,NavMenu::PARENT_ID,
        NavMenu::NAV_TYPE,NavMenu::POSITION,NavMenu::ID)
        ->orderBy(NavMenu::PARENT_ID,"asc")
        ->orderBy(NavMenu::POSITION,"asc")->get();
        $returnData = [];
        if(count($menuItems)){
            // Nav Menu By Type
            $menuItemTypes = collect($menuItems)->groupBy(NavMenu::NAV_TYPE)->toArray();
             
            foreach($menuItemTypes as $navType=>$val){
                //for each type item
                foreach($val as $item){
                    if(!filter_var($item[NavMenu::URL], FILTER_VALIDATE_URL)){
                        $item[NavMenu::URL] = url("")."/".$item[NavMenu::URL];
                        //dd(url("items"));
                    }
                    //parent id is null
                    if($item[NavMenu::PARENT_ID]==null && !isset($returnData[$navType][$item[NavMenu::ID]])){
                        $returnData[$navType][$item[NavMenu::ID]] = $item;
                    }
                    //if parent id is set i.e child node
                    if($item[NavMenu::PARENT_ID]){
                        $this->setChildren($returnData,$item);
                    }
                }                 
            } 
            if(count($returnData)){
                $return = ["status"=>true,"message"=>"menu items found.","data"=>$returnData,
                "menu_html"=>$this->getHtml($returnData)];
            }else{
                $return = ["status"=>false,"message"=>"menu items not found.","data"=>null];
            }
        }else{
            $return = ["status"=>false,"message"=>"menu items not set","data"=>null];
        }
        return response()->json($return);
    }

    public function setChildren(&$returnData,$item){

        foreach($returnData as $navType=>$navItem){
            //parent id matches             
            if($navType==$item[NavMenu::NAV_TYPE] && !empty($navItem[$item[NavMenu::PARENT_ID]])){
                $returnData[$item[NavMenu::NAV_TYPE]][$item[NavMenu::PARENT_ID]]["child_node"][] = $item;
                return true;
            }
            if(!empty($returnData[$item[NavMenu::NAV_TYPE]])){
                
                $this->findSetChild($returnData[$item[NavMenu::NAV_TYPE]],$item);
            }             

        }

        
    }
    
    /**
     * findSetChild
     *
     * @param  mixed $item
     * @param  mixed $itemSet
     * @return void
     */
    public function findSetChild(&$item,$itemSet){
        try{
            foreach($item as $navId=>$navItem){
                if($navItem[NavMenu::ID]==$itemSet[NavMenu::PARENT_ID]){
                    $item[$navId]["child_node"][] = $itemSet;
                    return true; 
                }
                if(!empty($item[$navId]["child_node"])){
                    return $this->findSetChild($item[$navId]["child_node"],$itemSet);
                }
            }
        }catch(Exception $exception){
            return false;
        }
    }
    
    /**
     * getHtml
     *
     * @param  mixed $returnData
     * @return void
     */
    public function getHtml($returnData){
        $html = [];
        foreach($returnData as $key=>$value){
            if(!isset($html[$key])){
                $html[$key] = '';
            }
            foreach($value as $keyVal){
                $html[$key] .= $this->getItemHTML($key,$html,$keyVal);
            }
            //$html[$key] = $this->getItemHTML($key,$html,$value);
        }
        return $html;
    }
    
    /**
     * getItemHTML
     *
     * @param  mixed $key
     * @param  mixed $html
     * @param  mixed $item
     * @return void
     */
    public function getItemHTML($key,$html,$item){
         
        $link_html = "";
        if($key=="top"){
            if(!empty($item["child_node"])){
                
                $subMenu = $this->getItemChildHTML($item,'<div class="dropdown-menu">');   
                $link_html .= '<li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        '.$item[NavMenu::TITLE].'
                                    </a>'.$subMenu.'</div>
                                    </li>';
            }else{
                $link_html .= '<li class="nav-item">
                                    <a target="'.$item[NavMenu::URL_TARGET].'" class="nav-link js-scroll-trigger" href="'.
                                    $item[NavMenu::URL].'">'.$item[NavMenu::TITLE].'</a>
                               </li>';
            }
        }
        
        return $link_html;  
    }
    
    /**
     * getItemChildHTML
     *
     * @param  mixed $item
     * @param  mixed $html
     * @return void
     */
    public function getItemChildHTML($item,$html){
        if(!empty($item["child_node"])){
            $html .='<a target="'.$item[NavMenu::URL_TARGET].'" class="dropdown-item" href="'.$item[NavMenu::URL].'">'.$item[NavMenu::TITLE].'</a>';
            foreach($item["child_node"] as $item_new){
                return $this->getItemChildHTML($item_new,$html);
            }            
        }else{
            return $html .='<a target="'.$item[NavMenu::URL_TARGET].'" class="dropdown-item" href="'.$item[NavMenu::URL].'">'.$item[NavMenu::TITLE].'</a>';
        }
    }
     
    public function galleryPage(){
        $obj = new GalleryItem();
        $getAllGalleryImages = $obj->getAllGalleryImages();
        $getAllVideos = $obj->getAllGalleryVideos();
        return view("HomePage.galleryPage",compact("getAllGalleryImages","getAllVideos"));
    }

    public function refreshCapthca(){
        try{
            $return = ["status"=>true,"message"=>"Success","data"=>Captcha::src()];
            
        }catch(Exception $exception){
            $return = ["status"=>false,"message"=>$exception->getMessage(),"data"=>$exception->getTraceAsString()];
        }
        return response()->json($return);
    }
}