<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This is meta description">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Hugo 0.74.3" />

  <!-- plugins -->
  
  <link rel="stylesheet" href="plugins/bulma/bulma.min.css">
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="plugins/slick/slick.css">

  <!-- Main Stylesheet -->
  {{-- <link rel="stylesheet" href="css/style.css" media="screen"> --}}
  <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">



  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset ('images/favicon.png')}}" type="image/x-icon">
  <link rel="icon" href="{{ asset('images/favicon.png')}}" type="image/x-icon">

  <meta property="og:title" content="Reader | Personal Bulma Blog Template" />
  <meta property="og:description" content="This is meta description" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:updated_time" content="2020-03-15T15:40:24+06:00" />
</head>

<body>
    @include('partials.navbar')

    <!-- start of banner -->
<div class="banner has-text-centered">
  <div class="container">
    <div class="columns is-centered">
      <div class="column is-9-widescreen">
        <h1 class="mb-6">What Would You <br> Like To Read Today?</h1>
      </div>
    </div>
  </div>

  
  <svg class="banner-shape-1" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
      stroke-miterlimit="10" />
    <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
    <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
      stroke-miterlimit="10" />
  </svg>
  
  <svg class="banner-shape-2" width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g filter="url(#filter0_d)">
      <path class="path"
        d="M24.1587 21.5623C30.02 21.3764 34.6209 16.4742 34.435 10.6128C34.2491 4.75147 29.3468 0.1506 23.4855 0.336498C17.6241 0.522396 13.0233 5.42466 13.2092 11.286C13.3951 17.1474 18.2973 21.7482 24.1587 21.5623Z" />
      <path
        d="M5.64626 20.0297C11.1568 19.9267 15.7407 24.2062 16.0362 29.6855L24.631 29.4616L24.1476 10.8081L5.41797 11.296L5.64626 20.0297Z"
        stroke="#040306" stroke-miterlimit="10" />
    </g>
    <defs>
      <filter id="filter0_d" x="0.905273" y="0" width="37.8663" height="38.1979" filterUnits="userSpaceOnUse"
        color-interpolation-filters="sRGB">
        <feFlood flood-opacity="0" result="BackgroundImageFix" />
        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
        <feOffset dy="4" />
        <feGaussianBlur stdDeviation="2" />
        <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
      </filter>
    </defs>
  </svg>

  
  <svg class="banner-shape-3" width="39" height="40" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0.965848 20.6397L0.943848 38.3906L18.6947 38.4126L18.7167 20.6617L0.965848 20.6397Z" stroke="#040306"
      stroke-miterlimit="10" />
    <path class="path" d="M10.4966 11.1283L10.4746 28.8792L28.2255 28.9012L28.2475 11.1503L10.4966 11.1283Z" />
    <path d="M20.0078 1.62949L19.9858 19.3804L37.7367 19.4024L37.7587 1.65149L20.0078 1.62949Z" stroke="#040306"
      stroke-miterlimit="10" />
  </svg>

  
  <svg class="banner-border" height="240" viewBox="0 0 2202 240" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path
      d="M1 123.043C67.2858 167.865 259.022 257.325 549.762 188.784C764.181 125.427 967.75 112.601 1200.42 169.707C1347.76 205.869 1901.91 374.562 2201 1"
      stroke-width="2" />
  </svg>
</div>
<!-- end of banner -->
<section class="section pb-0">
  <div class="container">
    <div class="columns is-desktop is-multiline">
      <div class="column is-4-widescreen is-6-desktop mb-5">
        <h2 class="h5 section-title">Editors Pick</h2>
        <article class="card">
          <div class="post-slider slider-sm">
            <img src="{{asset('frontend_assets')}}/images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
          </div>
          
          <div class="card-body">
            <h3 class="h4 mb-3"><a class="post-title" href="{{ asset ('detail')}}">Use apples to give your bakes caramel and a moist texture</a></h3>
            <ul class="card-meta list-inline">
              <li class="list-inline-item">
                <a href="{{asset('author')}}" class="card-meta-author">
                  <img src="{{asset('frontend_assets')}}/images/john-doe.jpg">
                  <span>Charls Xaviar</span>
                </a>
              </li>
              <li class="list-inline-item">
                <i class="ti-timer"></i>2 Min To Read
              </li>
              <li class="list-inline-item">
                <i class="ti-calendar"></i>14 jan, 2020
              </li>
            </ul>
            <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
            <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="column is-4-widescreen is-6-desktop mb-5">
        <h2 class="h5 section-title">Trending Post</h2>
        
        <article class="card mb-5">
          <div class="card-body is-flex">
            <img class="card-img-sm" src="{{asset('frontend_assets')}}/images/post/post-3.jpg">
            <div class="ml-3">
              <h4><a href="{{asset('detail')}}" class="post-title">Advice From a Twenty Something</a></h4>
              <ul class="card-meta mt-2">
                <li class="list-inline-item mb-0">
                  <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item mb-0">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
              </ul>
            </div>
          </div>
        </article>
        
        <article class="card mb-5">
          <div class="card-body is-flex">
            <img class="card-img-sm" src="{{asset('frontend_assets')}}/images/post/post-2.jpg">
            <div class="ml-3">
              <h4><a href="{{asset('detail')}}l" class="post-title">The Design Files - Homes Minimalist</a></h4>
              <ul class="card-meta mt-2">
                <li class="list-inline-item mb-0">
                  <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item mb-0">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
              </ul>
            </div>
          </div>
        </article>
        
        <article class="card mb-5">
          <div class="card-body is-flex">
            <img class="card-img-sm" src="{{asset('frontend_assets')}}/images/post/post-4.jpg">
            <div class="ml-3">
              <h4><a href="{{asset('detail')}}" class="post-title">The Skinny Confidential</a></h4>
              <ul class="card-meta mt-2">
                <li class="list-inline-item mb-0">
                  <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item mb-0">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
              </ul>
            </div>
          </div>
        </article>
      </div>
      
      <div class="column is-4-widescreen mb-5">
        <h2 class="h5 section-title">Popular Post</h2>
        
        <article class="card">
          <div class="post-slider slider-sm">
            <img src="{{asset('frontend_assets')}}/images/post/post-5.jpg" class="card-img-top" alt="post-thumb">
          </div>
          <div class="card-body">
            <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">How To Make Cupcakes and Cashmere Recipe At Home</a></h3>
            <ul class="card-meta list-inline">
              <li class="list-inline-item">
                <a href="{{asset('author')}}" class="card-meta-author">
                  <img src="{{asset('frontend_assets')}}/images/kate-stone.jpg" alt="Kate Stone">
                  <span>Kate Stone</span>
                </a>
              </li>
              <li class="list-inline-item">
                <i class="ti-timer"></i>2 Min To Read
              </li>
              <li class="list-inline-item">
                <i class="ti-calendar"></i>14 jan, 2020
              </li>
              <li class="list-inline-item">
                <ul class="card-meta-tag list-inline">
                  <li class="list-inline-item"><a href="{{asset('tags')}}">City</a></li>
                  <li class="list-inline-item"><a href="{{asset('tags')}}">Food</a></li>
                  <li class="list-inline-item"><a href="{{asset('tags')}}">Taste</a></li>
                </ul>
              </li>
            </ul>
            <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
            <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
          </div>
        </article>
      </div>
      <div class="column is-12">
        <div class="border-bottom border-default"></div>
      </div>
    </div>
  </div>
</section>

<section class="section-sm">
  <div class="container">
    <div class="columns is-justify-content-center">
      <div class="column is-12 mb-5 mb-lg-0">
  <h2 class="h5 section-title">Recent Post</h2>
  <div class="columns is-multiline is-desktop">
    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="post-slider slider-sm">
          <img src="{{asset('frontend_assets')}}/images/post/post-10.jpg" class="card-img-top" alt="post-thumb">
          <img src="{{asset('frontend_assets')}}/images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="post/elements/">Elements That You Can Use In This.</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/john-doe.jpg" alt="John Doe">
                <span>John Doe</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>3 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>15 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Demo</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Elements</a></li>
              </ul>
            </li>
          </ul>
          <p>Heading example Here is example of hedings. You can use this heading by …</p>
          <a href="post/elements/" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>
    
    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="post-slider slider-sm">
          <img src="{{asset('frontend_assets')}}/images/post/post-3.jpg" class="card-img-top" alt="post-thumb">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">Advice From a Twenty Something</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/john-doe.jpg">
                <span>Mark Dinn</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Decorate</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Creative</a></li>
              </ul>
            </li>
          </ul>
          <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
          <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>

    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="post-slider slider-sm">
          <img src="{{asset('frontend_assets')}}/images/post/post-7.jpg" class="card-img-top" alt="post-thumb">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">Advice From a Twenty Something</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/john-doe.jpg">
                <span>Charls Xaviar</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Color</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Recipe</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Fish</a></li>
              </ul>
            </li>
          </ul>
          <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
          <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>
    
    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">Cheerful Loving Couple Bakers Drinking Coffee</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/kate-stone.jpg" alt="Kate Stone">
                <span>Kate Stone</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Wow</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Tasty</a></li>
              </ul>
            </li>
          </ul>
          <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
          <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>

    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">How To Make Cupcakes and Cashmere Recipe At Home</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/kate-stone.jpg" alt="Kate Stone">
                <span>Kate Stone</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">City</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Food</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Taste</a></li>
              </ul>
            </li>
          </ul>
          <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
          <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>
    
    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="post/elements/">Elements That You Can Use In This Template.</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}." class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/john-doe.jpg" alt="John Doe">
                <span>John Doe</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>3 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>15 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Demo</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Elements</a></li>
              </ul>
            </li>
          </ul>
          <p>Heading example Here is example of hedings. You can use this heading by …</p>
          <a href="post/elements/" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>
    
    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="post-slider slider-sm">
          <img src="{{asset('frontend_assets')}}/images/post/post-3.jpg" class="card-img-top" alt="post-thumb">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">Advice From a Twenty Something</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/john-doe.jpg">
                <span>Mark Dinn</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Decorate</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Creative</a></li>
              </ul>
            </li>
          </ul>
          <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
          <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>

    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="post-slider slider-sm">
          <img src="{{asset('frontend_assets')}}/images/post/post-7.jpg" class="card-img-top" alt="post-thumb">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">Advice From a Twenty Something</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/john-doe.jpg">
                <span>Charls Xaviar</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Color</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Recipe</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Fish</a></li>
              </ul>
            </li>
          </ul>
          <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
          <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>
    
    <div class="column is-4-desktop">
      <article class="card mb-4">
        <div class="post-slider slider-sm">
          <img src="{{asset('frontend_assets')}}/images/post/post-1.jpg" class="card-img-top" alt="post-thumb">
        </div>
        <div class="card-body">
          <h3 class="h4 mb-3"><a class="post-title" href="{{asset('detail')}}">Cheerful Loving Couple Bakers</a></h3>
          <ul class="card-meta list-inline">
            <li class="list-inline-item">
              <a href="{{asset('author')}}" class="card-meta-author">
                <img src="{{asset('frontend_assets')}}/images/kate-stone.jpg" alt="Kate Stone">
                <span>Kate Stone</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 Min To Read
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>14 jan, 2020
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="{{asset('tags')}}">Wow</a></li>
                <li class="list-inline-item"><a href="{{asset('tags')}}">Tasty</a></li>
              </ul>
            </li>
          </ul>
          <p>It’s no secret that the digital industry is booming. From exciting startups to …</p>
          <a href="{{asset('detail')}}" class="btn btn-outline-primary">Read More</a>
        </div>
      </article>
    </div>
  </div>
</div>
    </div>
  </div>
</section>

<footer class="footer">
  <svg class="footer-border" height="214" viewBox="0 0 2204 214" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M2203 213C2136.58 157.994 1942.77 -33.1996 1633.1 53.0486C1414.13 114.038 1200.92 188.208 967.765 118.127C820.12 73.7483 263.977 -143.754 0.999958 158.899"
      stroke-width="2" />
  </svg>
  
  <div class="container">
      <div class="columns is-multiline is-align-items-center">
      <div class="column is-2-desktop has-text-centered mb-4">
          <a>
            <img class="img-fluid" width="100px" src="{{asset('frontend_assets')}}/images/logo.png" alt="Reader | Hugo Personal Blog Template">
          </a>
      </div>
      <div class="column is-5-desktop has-text-right-desktop has-text-centered mb-4">
          <ul class="footer-list mb-0">
          
          <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a></li>
          
          <li class="list-inline-item"><a href="#"><i class="ti-youtube"></i></a></li>
          
          </ul>
      </div>
      <div class="column is-12">
          <div class="border-bottom border-default"></div>
      </div>
      </div>
  </div>
  </footer>


  <!-- JS Plugins -->
  <script src="plugins/jQuery/jquery.min.js"></script>

  <script src="plugins/slick/slick.min.js"></script>

  <script src="plugins/instafeed/instafeed.min.js"></script>


  <!-- Main Script -->
  <script src="js/script.js"></script>
</body>
</html>
