<x-layout title="Homepage - DishDash">

    <x-header />

    <!-- Super Delicius -->
    <div class="container my-5 pt-5 index">
        <div class="row pt-1">
            <div class="col-12 mb-3">
                <h2>Super Delicius</h2>
            </div>
            @foreach ($recipes as $recipe)
            <div class="col-4">
                <div class="card border position-relative">
                    <div class="card-body">
                        <a href="{{route('recipe.show', compact('recipe'))}}">
                            <div class="image-container position-relative">
                                <img src="{{Storage::url($recipe->img)}}" class="card-img-top img-fluid">
                                <div class="recipe-icon">
                                    <h5 class="link-light">Go to the Recipe <i class="bi bi-arrow-right-circle"></i></h5>
                                </div>
                            </div>
                            <h5 class="text-start pt-3 p-3">{{$recipe->title}}</h5>
                        </a>
                        <ul class="rating pt-3">
                            @for ($i = 0; $i < 5; $i++)
                                <li><a href="#" class="link-red">
                                    <i class="bi bi-suit-heart-fill fa-sm fas active"></i>
                                </a></li>
                                @endfor
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



    <!-- categories -->
    <div class="container categories my-5">
        <div class="row justify-content-around align-items-center">
            <div class="col-12 mb-5">
                <h2>Popular Categories</h2>
                <a href="{{route('categories')}}">View All <i class="bi bi-arrow-right-circle"></i></a>
            </div>
            @foreach ($categories as $category)
            <div class="col-6 col-md-2 col-lg-2 text-center">
                <a href="{{ route('category.recipes', ['category' => $category->id]) }}">
                    <img src="/images/popular-cat/{{ strtolower($category->name) }}.png" alt="{{ $category->name }}" class="img-fluid rounded-circle p-2 mb-3">
                    <h4>{{ $category->name }}</h4>
                </a>
            </div>
            @endforeach
        </div>
    </div>

    <section class="spikes">
        <div class="container-fluid my-5">
            <div class="row justify justify-content-center">
                <div class="col-12 col-lg-9 col-xl-8">
                    <form class="px-5">
                        <div class="form-banner p-2">
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-11">
                                    <div class="row mt-0">
                                        <div class="col-md-12 pt-5">
                                            <h4 class="text-center heading">Deliciousness to you inbox</h4>
                                            <p class="text-center sub-heading">Enjoy weekly hand picked recipes and recommendations</p>
                                        </div>
                                    </div>

                                    <div class="col-md-12 pb-5">
                                        <div class="subscribe">
                                            <input type="email" placeholder="Email">
                                            <button class="btn btn-custom w-100 mt-3">Subscribe →</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Hand Picked Collection -->
    <div class="container my-5 pt-5 pb-5">
        <div class="row pt-1">
            <div class="col-12 mb-3">
                <h2>Hand-Picked Collections</h2>
            </div>
            <div class="col-md-6 p-5">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/collection/1.png" class="card-img-top img-fluid">
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="text-start pt-3">Sushi Combos for your Next Party</h3>
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                                <p class="small bg-custom-1 rounded px-2 mt-3">156 Recipes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  p-5">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/collection/2.png" class="card-img-top img-fluid">
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="text-start pt-3">Everything Bagel</h3>
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                                <p class="small bg-custom-1 rounded px-2 mt-3">156 Recipes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  p-5">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/collection/3.png" class="card-img-top img-fluid">
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="text-start pt-3">Cook Like a Chef</h3>
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                                <p class="small bg-custom-1 rounded px-2 mt-3">156 Recipes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  p-5">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/collection/4.png" class="card-img-top img-fluid">
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="text-start pt-3">Exquisite Dinner Recipe Ideas</h3>
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                                <p class="small bg-custom-1 rounded px-2 mt-3">156 Recipes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/collection/5.png" class="card-img-top img-fluid">
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="text-start pt-3">The Ultimate Cookie Frenzy</h3>
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                                <p class="small bg-custom-1 rounded px-2 mt-3">156 Recipes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 p-5">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/collection/6.png" class="card-img-top img-fluid">
                        <div class="row mt-3">
                            <div class="col-8">
                                <h3 class="text-start pt-3">For the Love of Donuts</h3>
                            </div>
                            <div class="col-4 d-flex justify-content-center align-items-center flex-column">
                                <p class="small bg-custom-1 rounded px-2 mt-3">156 Recipes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Latest Recipes -->
    <div class="container my-5 pt-5 pb-5">
        <div class="row pt-1">
            <div class="col-12 mb-3">
                <h2>latest Tooth</h2>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/1.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Caramel Strawberry Milkshake</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/2.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Cashew Vegan Rice</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/3.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Smoked Salmon Salad Sandwich</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/4.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Salmon in Creamy Sun Dried Tomato Sauce</h5>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/5.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Healthy Jam Waffle Breakfast</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/6.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Chocolate and Banana Jar Cake</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/7.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Caramel Blueberry Scones</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/8.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Blueberry Carrot Cake</h5>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/9.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Vegan Cauliflower Salad</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/10.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Roasted Red Pepper Soup</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/11.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Egg and Avocado Toast</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/12.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Pork Shoulder Cashew Noodles</h5>
                    </div>
                </div>
            </div>




            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/13.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Toasted Farfalle in Pesto Sauce</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/14.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Cheesy Bancon Burger Sliders</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/15.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Fig and Raisins Oatmeal</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/16.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Silky Smooth Pannacotta</h5>
                    </div>
                </div>
            </div>





            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/17.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Triple Decker Cranberry Cake</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/18.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Very Berry Healthy Sumemr Smoothie</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/19.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Crispy Orange Chips</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/20.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Tumeric Lavander Tea</h5>
                    </div>
                </div>
            </div>




            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/21.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Blue Velvet Brownies</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/22.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Birthday Cupcakes</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/23.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Gourmet Fillet in Roaster Almond Sauce</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-6 my-3">
                <div class="card  border position-relative">
                    <div class="card-body">
                        <img src="/images/latest/24.png" class="card-img-top img-fluid">
                        <h5 class="text-start pt-3">Four Ingredient Oastmeal Pancakes</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>