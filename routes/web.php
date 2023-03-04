<?php


use App\Http\Controllers\Admin\Article\CreateController as Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Livewire\Front\Home\Index;
use App\Http\Livewire\Front\Product\SingleProduct;
use App\Http\Livewire\Front\Contact\Index as Contact;
use App\Http\Livewire\Front\AboutUs\Index as About;
use App\Http\Livewire\Front\Rules\Index as Rules;
use App\Http\Livewire\Admin\Category\Index as Category;
use App\Http\Livewire\Admin\Product\Index as Product;
use App\Http\Livewire\Admin\Articles\Create as CreateArticle ;
use App\Http\Livewire\Admin\Articles\Index as ListArticle ;
use App\Http\Livewire\Admin\Articles\Edit as EditArticle ;
use App\Http\Livewire\Admin\Attr\Index as Attr;
use App\Http\Livewire\Admin\Orders\Index as Order;
use App\Http\Livewire\Admin\Orders\Details as OrderDetail;
use App\Http\Livewire\Admin\Copoun\Index as Coupon;
use App\Http\Livewire\Admin\Attr\AddToProduct as AddAttrToProduct;
use App\Http\Livewire\Admin\Portfolio\Index as Portfolio;
use App\Http\Livewire\Admin\Portfolio\Edit as EditPortfolio;
use App\Http\Livewire\Front\Portfolio\Index as PortfolioList;
use App\Http\Livewire\Front\Portfolio\Single as PortfolioDetail;
use App\Http\Livewire\Front\Buying\Basket as ShoppingCart;
use App\Http\Livewire\Front\Product\ListProduct as Store;
use App\Http\Livewire\Front\Buying\Checkout;
use App\Http\Livewire\Front\Buying\Callback as PaymentCallback;
use App\Http\Livewire\Front\Services\WebDesign as Web;
use App\Http\Livewire\Front\Question\Index as Question;
use App\Http\Livewire\Front\Article\Index as Articles;
use App\Http\Livewire\Front\Article\SingleArticle as SingleArticle;
use App\Http\Livewire\Admin\UserPannel\Orders\Index as MyOrder;
use App\Http\Livewire\Admin\UserPannel\Orders\Detail as MyOrderDetails;
use App\Http\Livewire\Admin\User\Role;
use App\Http\Livewire\Admin\User\Index as User;
use App\Http\Livewire\Admin\User\Edit as UserEdit;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',Index::class)->name('welcome');
Route::get('/testlogin',function (){
    $user=\App\Models\User::where('id',1)->first();
    auth()->login($user);
    redirect()->route('welcome');
});
Route::get('/testtt',function (){

    $cart=session()->get('ShoppingCart');
    dd($cart[0]['name']);

});

Route::get('/home',[HomeController::class,'home'])->middleware('auth')->name('home');
Route::get('/register',[AuthController::class,'register_view'])->name('register.view');
Route::post('/user/store',[AuthController::class,'register'])->name('do.register');
Route::get('/verification',[AuthController::class,'verify'])->name('verify.view');
Route::post('/user/verify',[AuthController::class,'doverify'])->name('do.verify');
Route::get('/login',[AuthController::class,'login_view'])->name('login.view');
Route::post('/user/login',[AuthController::class,'login'])->name('do.login');
Route::post('/send_code',[AuthController::class,'SendCode'])->name('send.code');
Route::get('/test',[AuthController::class,'test']);

//Admin//
Route::group(['middleware'=>['auth']],function (){
    Route::get('/admin/permission',Role::class)->name('role');
    Route::get('/admin/user',User::class)->name('user');
    Route::get('/admin/user/edit/{id}',UserEdit::class)->name('user.edit');
    Route::get('/admin/category',Category::class)->name('category');
    Route::get('/admin/product',Product::class)->name('product');
    Route::get('/admin/product/edit/{id}',[\App\Http\Controllers\Admin\ProductController::class,'edit'])->name('product.edit');
    Route::get('/admin/product/edit/update/{id}',[\App\Http\Controllers\Admin\ProductController::class,'update'])->name('product.update');
    Route::get('/admin/attr',Attr::class)->name('attr');
    Route::get('/admin/AddAttrToProduct',AddAttrToProduct::class)->name('AddAttrToProduct');
    Route::get('/admin/order',Order::class)->name('order');
    Route::get('/admin/order/detail/{id}',OrderDetail::class)->name('detailOrder');
    Route::get('/admin/coupon',Coupon::class)->name('coupon');
    Route::get('/admin/Portfolio',Portfolio::class)->name('Portfolio');
    Route::get('/admin/Portfolio/edit/{id}',EditPortfolio::class)->name('editPortfolio');
    Route::get('/admin/article/create',[Article::class,'create'])->name('createArticle');
    Route::post('/admin/article/store',[Article::class,'store'])->name('storeArticle');
    Route::get('/admin/article/list',[Article::class,'index'])->name('listArticle');
    Route::get('/admin/article/edit/{id}',[Article::class,'edit'])->name('edit.article');
    Route::patch('/admin/article/edit/update/{id}',[Article::class,'update'])->name('update.article');
    Route::delete('/admin/article/edit/delete/{id}',[Article::class,'delete'])->name('delete.article');
    Route::post('/admin/article/ckeditor',[Article::class,'upload'])->name('ckeditor.upload');

// UserPannel//

    Route::get('/my-account',[\App\Http\Controllers\Admin\MyDashboardController::class,'dashboard'])->name('MyDashboard');
    Route::get('/user/order',MyOrder::class)->name('user.order');
    Route::get('/user/order/details/{id}',MyOrderDetails::class)->name('user.order.derails');
});



//Front//
Route::group(['middleware' => ['web','HtmlMinifier']], function () {

    Route::get('/store',Store::class)->name('store');
    Route::get('/product/{slug}',SingleProduct::class)->name('SingleProduct');
    Route::get('/portfolio',PortfolioList::class)->name('portfolioList');
    Route::get('/portfolio/detail/{id}',PortfolioDetail::class)->name('detailPortfolio');
    Route::get('/shopping-cart',ShoppingCart::class)->name('ShoppingCart');
//    Route::get('/checkout',Checkout::class)->name('Checkout');
    Route::get('/checkout',[\App\Http\Controllers\Front\CheckoutController::class,'index'])->name('Checkout');
    Route::get('/checkout/pay',[\App\Http\Controllers\Front\CheckoutController::class,'storeOrder'])->name('pay');
    Route::get('/payment-callback',PaymentCallback::class)->name('paymentCallback');
    Route::get('/contact-us',Contact::class)->name('contactUs');
    Route::get('/about-us',About::class)->name('aboutUs');
    Route::get('/rules',Rules::class)->name('rules');
    Route::get('/frequently-asked-questions',Question::class)->name('questions');
    Route::get('/web-design-service',Web::class)->name('webDesignService');
    Route::get('/articles',Articles::class)->name('articles');
    Route::get('/articles/{slug}',SingleArticle::class)->name('single.article');

});








