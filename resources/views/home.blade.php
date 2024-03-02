@extends('layouts.app')

@section('content')
    <section>
        <div class="banner-main">
            <img src="images/banner.jpg" alt="#" />

            <div class="container">
                <div class="text-bg">
                    <h1><strong class="white">Find your flight</strong></h1>
                    <form action="/search/flights" method="post" onsubmit="return validateForm()">
                        @csrf
                        <h4><strong class="white">From: </strong>
                            <input type="text" id="from" name="from" required>
                            <strong class="white">To: </strong>
                            <input type="text" id="to" name="to" required>
                            <strong class="white">Date: </strong>
                            <input type="date" id="date" name="date" required min="{{ date('Y-m-d') }}">
                            <div class="button_section"> <button class="main_bt" type="submit"
                                    href="#">Search</button> </div>
                            <!-- <button type="submit">search</button> -->


                        </h4>
                    </form>
                    <script>
                        function validateForm() {
                            var fromInput = document.getElementById("from");
                            var toInput = document.getElementById("to");
                            
                            if (fromInput.value === toInput.value) {
                                alert("From and To values cannot be the same.");
                                return false; // Prevent form submission
                            }
                            
                            return true; // Allow form submission
                        }
                    </script>

                </div>
            </div>
        </div>
    </section>

    <!-- about -->
    <div id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2>About  travel Sensei</h2>
                        <span> Here are some of the important introduction about the travelsensei. Read it carefully and
                            know about us.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="about-box">
                            <p> <span>The world is growing at a very fast pace with high level of technological
                                    advancements. Globalization is now reaching to almost every corner of the world at a
                                    very rapid rate. In today’s airline industry users or customers can reserve seat or book
                                    flight from any place in the world as long as they are connected to internet.
                                    The Travel and Tour System is an innovative project designed to provide efficient and
                                    streamlined solutions for managing flights and organizing tours. </span></p>
                            <div class="palne-img-area">
                                <img src="images/plane-img.png" alt="images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/home">Read More</a>
        </div>
    </div>
    <!-- end about -->
    <html>
      <heaad>
     <!-- our blog -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      </head>
    <div id="destination-container">
      
      <body>
      <h1 class="heading-title"> Places to Visit in Nepal </h1>
      <h2 class="heading-desc"> Here are the top 20 tourist places and attractions in Nepal </h2>
      <h3 class="heading-desc"> Read more to plan your travel to Nepal.</h3>
      <div class="places">
        <style>
          #mapContainer {
              display: none;
          }
      </style>
        
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/images/pokhara.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <p>Pokhara,Nepal</p>
          </div>
      </div>
      
    </div>
    <div class="description">
    <a href="/map" class="place-name">1. Pokhara</a>
      <div class="place-description">Pokhara, the 'Tourist Capital of Nepal,' is the second-largest city in this Himalayan country, after Kathmandu. At an altitude of more than 900m, it is one of the highest cities, 
        making it the base for many world-famous treks. The highlight of the town is its Lakeside, which is a boating paradise fl...</div>
        <p class="mb-3"><b>Best Time: </b> September to November </p> 
        <div id="bustyle">
          <button><a href ="https://goo.gl/maps/fRXJiYq6QYPhdQcD9"> Know More</a></button> <!-- Pokhara -->
          <a href="/package" class="button">Show Packages</a>
          </div>  
          <div class="map-container" id="map1">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112488.25482188001!2d83.87421639915051!3d28.2298489574237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1692692208117!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
        {{-- <a href="{{ route('destination') }}"> --}}
          <!-- <button onclick="showMore(0)">Go to Destination Page</button> -->
        </a>
      </div>
    </div>
    
    <div id="map"></div>
    
    <div class="places">
      <div class="description">
        <a href="#" id="kathmandu-link">2.Kathmandu</a>
           <div class="place-description"> Sprawled over its namesake valley surrounded by Himalayan mountains, Kathmandu is Nepal’s capital and 
             most-visited destination, full of ancient temples, golden pagodas, natural beauty and fascinating villages. At an elevation of 4,344 feet, Kathmandu marks the confluence of the Bagmati and Vishnumat... </div>
             <p class="mb-3"><b>Best Time: </b> September to November </p> 
            <div id="bustyle">
             <button><a href="https://goo.gl/maps/9sYRezpLB1bgpnXH7"> Know More </a></button> <!-- Kathmandu -->
             <a href="/package" class="button">Show Packages</a>
             <div class="map-container" id="map2">
              {{-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56516.27776845703!2d85.28493295597666!3d27.709030241895455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1692690685550!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
          
            </div>
          </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
              </div>
              <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/ktm.jpg" class="d-block w-100" alt="...">
        </div>
        
      </div>
      
    </div>   </div>
    
    <div class="places">
      <div class="images"><img id="images-size" src="/images/lm.jpg" alt=""></div>
      <div class="description">
      <a href="#" id="lumbini-link">3. Lumbini</a>
        <div class="place-description">Nestled in the Himalayas in Nepal,&nbsp; the beautiful town of Lumbini is the birthplace of Lord Buddha. Lumbini is a&nbsp;UNESCO World Heritage Site with many ancient stupas dating back to 2000 years
          and monasteries built by past dynasties. People come here from all over the world to this abode of ...</div>
          <p class="mb-3"><b>Best Time: </b> April to May </p>
          <div id="bustyle">
          <button> <a href="https://goo.gl/maps/8xpYihitVUZt5QFH7">Know More</a></button> <!-- Kathmandu -->
          <a href="/package" class="button">Show Packages</a>
          </div>
          
        </div>
      </div>
      <div class="places">
        <div class="description">
        <a href="#" id="janakpur-link">4. Janakpur</a>
          <div class="place-description">Janakpur is a city in Nepal which is believed to be the birthplace of Goddess Sita and the place of her marriage with Lord Ram. Also known as the City of Ponds, Janakpur boasts of more
            than seventy ponds that dot its verdant landscape.&nbsp;Here you can learn more about the ancient and revered Hindu...</div>
            <p class="mb-3"><b>Best Time: </b> September to March </p> 
            <div id="bustyle">
            <button><a href="https://goo.gl/maps/1w1Bt6sQ6k6vnyZk6">Know More </a></button> <!-- Kathmandu -->
            <a href="/package" class="button">Show Packages</a>
          </div>
          </div>
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/images/jn.jpg" class="d-block w-100" alt="...">
        </div>
        
      </div>
    </div>   </div>
    </div>
    
    <div class="places">
      <div class="images"><img id="images-size" src="/images/bk.jpg" alt=""></div>
      <div class="description">
      <a href="#" id="bhaktapur-link">5. Bhaktapur</a>
        <div class="place-description">Bhaktapur is one of three medieval cities in the Kathmandu Valley, the other two being Kathmandu and Patan. It is often referred to as Bhadgaon and Khwopa and has a mix of Hindu 
           and Buddhist population. This city is located around 12 kilometres from the capital city of Kathmandu and is divided into ...</div>
           <div id="bustyle">
           <button> <a href="https://goo.gl/maps/9rXky1F4KBZTXaEA6">Know More</a></button> <!-- Kathmandu -->
           <a href="/package" class="button">Show Packages</a>
          </div>
          </div>
        </div>
        <div class="places">
          <div class="description">
          <a href="#" id="patan-link">6. Patan</a>
           <div class="place-description">Patan is the third-largest city in Nepal right after Kathmandu and Pokhara. It is&nbsp;presently known as Lalitpur. Both names are derived from the Sanskrit word ‘Lalitapattan’.
             The city is located just across the river Bagmati from Kathmandu. Patan has a Durbar Square that is full of statues, temples...</div>
            <div id="bustyle">
             <button> <a href="https://goo.gl/maps/ihuDhgwR5tFu5bdV7">Know More </a></button> <!-- Kathmandu -->
             <a href="/package" class="button">Show Packages</a>
          </div>
             
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/patan.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>   </div>
    </div>
    
    <div class="places">
      <div class="images"><img id="images-size" src="/images/chit.jpg" alt=""></div>
       <div class="description">
       <a href="/home" class="place-name" onclick="initMap(27.9207, 82.7347)"> 7. Chitlang </a>
          <div class="place-description">Chitlang is an ancient Newar dominant village in Nepal. Surrounded by the Chandragiri hills, it is acclaimed as one&nbsp;of the most popular stops in the old trading routes from 
            Tibet to India and thus holds a rich historical significance. Chitlang serves to be the most preferred destination from Ka...</div>
            <div id="bustyle">
            <button> <a href="https://goo.gl/maps/kwcPP5Vja1s86a5k9">Know More<</a></button> <!-- Kathmandu -->
            <a href="/package" class="button">Show Packages</a>
          </div>
          </div>
        </div>
        <div class="places">
          <div class="description">
          <a href="/home" class="place-name" > 8. Mustang </a>
            <div class="place-description"> Mustang is known for its trekking tours and mountain sightseeing. Elevated at an altitude of 3840 kilometres, this city is divided into two parts: Lower and Upper Mustang. 
              Even though it is relatively unexplored, this city is a great destination for those who want to immerse in Tibetan culture as we...</div>
              <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
            <div id="bustyle">
              <button> <a href="https://goo.gl/maps/tywqME8JRbqNew3JA">KnowMore</a></button> <!-- Kathmandu -->
             <a href="/package" class="button">Show Packages</a>
            </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/mus.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>   </div>
    </div>
    
    <div class="places">
      <div class="images"><img id="images-size" src="/images/jm.jpg" alt="" width="450" height="400"></div>
      <div class="description">
      <a href="/home" class="place-name"> 9. Jomsom </a>
        <div class="place-description">Jomsom is also known as Dzong-Sampa or New Fort. Jomsom lies along both the banks of Kali Gandaki river in the Mustang District of Nepal. Jomsom is the capital of Mustang 
          district. Kali Gandaki happens to be the deepest gorge in the world. The altitude of Jomsom is 2700 m. Jomsom has developed as a ...</div>
          <div id="bustyle">
          <button> <a href="https://goo.gl/maps/n65b4QyyKHt4QvTq9">Know More </a></button> <!-- Kathmandu -->
          <a href="/package" class="button">Show Packages</a>

          </div>
        </div>
      </div>
      <div class="places">
        <div class="description">
      <a href="/home" class="place-name"> 10. Mount Manaslu </a>
          <div class="place-description"> The word Manaslu comes from the Sanskrit word manas, which means a person's soul, and Mount Manaslu can be reflected as exactly that - the mountain of the soul. 
            Despite all the chaotic craze around mountain trekking that Nepal experiences every season, Manaslu has surprisingly held on to its pristin...</div>
              <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
          <div id="bustyle">
              <button> <a href="https://goo.gl/maps/bU61Uyy6nEfA6tkp7">Know More</a></button> <!-- Mount Manaslu -->
          <a href="/package" class="button">Show Packages</a>
          </div>

              
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/mount.jpg" class="d-block w-100" alt="...">
                </div>
                </div>
      </div>
    </div>   </div>
    </div>
    
    <div class="places">
      <div class="images"><img id="images-size" src="/images/g.jpg" alt=""></div>
      <div class="description">
      <a href="/map" class="place-name" onclick="initMap(28.2964, 84.8568); return false;"> 11. Gorkha </a>
        <div class="place-description">Some 25 km north of Abu Khaireni, the picturesque town called Gorkha is the ancient home of the lionhearted Gorkha people. Around 300 years ago, when Prithvi 
          Narayan Shah unified all the rivalling fiefdoms of Nepal into one monarchy and divided up the country into 50 different states, Gorkha was bor...</div>
          <div id="bustyle">
          <button><a href="https://goo.gl/maps/vdWn2w6atCX6V8Y36">Know More</a></button>
          <a href="/package" class="button">Show Packages</a>
          </div>  
          
        </div>
      </div>
    
      <div class="places">
        <div class="description">
      <a href="/map" class="place-name" onclick="initMap(27.9194, 85.1661); return false;"> 12. Nuwakot </a>
          <div class="place-description"> Stuck somewhere in between the 17th-century ambience and 21st-century facilities, Nuwakot is one of the most attractive destinations of Nepal. Albeit there are not many attractions 
            to see, the Nuwakot Palace and its Durbar Square in itself are enough to draw the travellers who love to delve deep dow...</div>
            <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
            <div class="bustyle">
            <button> <a href="https://goo.gl/maps/ozero4vW9gwJVxBv6">Know More</a></button> <!-- Nuwakot -->
          <a href="/package" class="button">Show Packages</a>
            </div>

            
          </div>
          
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/nuwa.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>   </div>
    </div>
    
    <div class="places">
      <div class="images"><img id="images-size" src="/images/kb.jpg" alt=""></div>
      <div class="description">
      <a href="/map" class="place-name" onclick="initMap(28.8374, 83.7838)"> 13. Kagbeni </a>
        <div class="place-description">Far away from the bustling town squares and temples and dance festivals of the towns and cities of Nepal, the village of Kagbeni awaits you with its audacious beauty. Officially 
            Kagbeni is a settlement that bridges the gap between Lower and Upper Mustang, right at the feet of Muktinath Valley by the...</div>
            <div class="bustyle">
            <button> <a href="https://goo.gl/maps/3JsyzryNd8rRX8x19">Know More</a></button> <!-- Kagbeni -->
            <a href="/package" class="button">Show Packages</a>
            </div>
          
          </div>
        </div>
        
        <div class="places">
        <div class="description">
      <a href="/map" class="place-name" onclick="initMap(28.8374, 83.7838)"> 13. Shivpuri National Park </a>
           <div class="place-description"> Towards the north of the Kathmandu valley, just from where the hustle and bustle of the urban world start to fade away, and the imaginary lines of the city get blurred into the outskirts, 
             lies the Shivpuri National Park. The sprawling sub-tropical forest, spreading for around 160 square meters, the ...</div>
              <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
            <div class="bustyle">
              <button> <a href="https://goo.gl/maps/2mSig3YEHXHHxDXa9">Know More</a></button>
             <a href="/package" class="button">Show Packages</a>
            </div>
              
            </div>
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/sp.jpg" class="d-block w-100" alt="...">
        </div>
        </div>
      </div>
    </div>   </div>
    
    </div>
    
    <div class="places">
      <div class="images"><img id="images-size" src="/images/bandipur.jpg" alt=""></div>
      <div class="description">
        <div class="place-name">15. Bandipur</div>
        <div class="place-description">Pretty as a picture - that is how one can perfectly describe Bandipur. This living and breathing abode of Newari culture is a hilltop settlement in the Gandaki 
          Zone at 1030 metres, some 700 metres above the Marsyangdi River. The municipality snuggles itself on the saddle of the Mahabharat Range...</div>
          <div class="bustyle">
          <button> <a href="https://goo.gl/maps/aUBaW2ezGmRazBt86">Know More</a></button> <!-- Bandipur -->
          <a href="/package" class="button">Show Packages</a>
          </div>
        </div>
      </div>
      
      <div class="places">
        <div class="description">
          <div class="place-name">16. Chitwan National Park</div>
          <div class="place-description"> Chitwan National Park is the first step that Nepal took towards protection of the wildlife and nature at large. Located in the subtropical inner 
            Terai lowlands of south-central Nepal, the national park covers an area of 952.63 sq. km. over the districts of Nawalparasi, Parsa, Makwanpur and Chitwan i...</div>
            <!-- <p class="mb-3"><b>Best Time: </b> September to March </p>  -->
            <div class="bustyle">
            <button> <a href="https://goo.gl/maps/48LkTmMYNMeXFF3X9">Know More</a></button> <!-- Chitwan -->
          <a href="/package" class="button">Show Packages</a>
            </div>
            
          </div>
          
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/np.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
    </div>   </div>
    
    </div>
  </body>
  </html>

    
@endsection
