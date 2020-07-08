@php 
use App\Category; 
$categories = Category::all(); 
@endphp
<div class="categories">
    <h4> Product Categories </h4>
  <div id="main-menu" class="list-group">
      
    <!--  <a href="#sub-menu2" class="list-group-item" data-toggle="collapse" data-parent="#main-menu">Item 1 <span class="caret"></span></a>
      
      <div class="collapse list-group-level1" id="sub-menu2">
        <a href="#" class="list-group-item" data-parent="#sub-menu">Sub Item 1</a>
        <a href="#" class="list-group-item" data-parent="#sub-menu">Sub Item 2</a>
        <a href="#" class="list-group-item" data-parent="#sub-menu">Sub Item 3</a>
      </div> -->

  @foreach($categories as $category)
      <a href="{{Route('Category.product',$category->id)}}" class="list-group-item">{{$category->title}}</a>
  @endforeach

  </div>
</div>  