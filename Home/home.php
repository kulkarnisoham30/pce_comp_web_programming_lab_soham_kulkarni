<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irrigate Smart | Optimize your irrigation with Weather Data</title>
    <link rel="shortcut icon" href="images/favicon1.ico" type="image/x-icon">
    <link rel="stylesheet" href="home.css">


    <script src="https://kit.fontawesome.com/3ea0667da6.js" crossorigin="anonymous"></script>
</head>

<body>


    <!-- ---------------------------- NAVBAR ----------------------------  -->

    <nav>
        <div class="nav1">
            <p id="currentTime"></p>
            <button><a href="marathi.html" id="languageLink">मराठी</a></button>
            <span>Font Size:   <i class="fa-regular fa-plus"></i>  <i class="fa-solid fa-minus"></i></span>
            <span class="search-wrapper">
                <input type="text" placeholder="Search here">
                <i class="fa-solid fa-magnifying-glass"></i>
            </span>
        </div>
        <div class="navbar1">
            <div class="logos">
                <a href="index.html" target="./blank"><img src="images/company logo.jpg" alt="Company Logo!"></a>
            </div>
            <div class="names">
                <ul>
                    <li><a href="#home1">Home</a></li>
                    <li><a href="#weather_forecast">Weather Forecast</a></li>
                    <li><a href="#irrigation_scheduler">Irrigation Scheduler</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="../Login and registration/logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="menu">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </nav>


    <!-- ---------------------------- BODY ----------------------------  -->

        <div id="home1">

        </div>
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="images/intro1.jpg" style="width:100%">
                <div class="text1">JOIN THE WORLD'S LARGEST IRRIGATION <br> SCHEDULER ON WEATHER FORECAST. <br><br><button>JOIN US</button></div>
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="images/intro2.jpg" style="width:100%">
                <div class="text2">TAKE INFORMATION ABOUT THE WEATHER <br> OF THE UPCOMING 15 DAYS! <br><br><button>SEE WEATHER</button></div>
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="images/intro3.jpg" style="width:100%">
                <div class="text3">SEE THE IRRIGATION SCHEDULER <br> TO EXPLORE MORE! <br><br><a href="https://en.wikipedia.org/wiki/Irrigation_scheduling" target="_blank"><button>LEARN MORE</button></a></div>
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="images/intro4.avif" style="width:100%">
                <div class="text4">CONNECT WITH US AND <br> MAKE A HUGE PROGRESS IN AGRICULTURE. <br><br><a href="../About us/aboutus.html"><button>CONNECT WITH US</button></a></div>
            </div>
    
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>
    
        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
        </div>



        <div id="home">
            <div class="containers">
                <h1 class="sub-title">
                    Best crops for all seasons
                </h1>
                <div class="work-list">
                    <div class="work">
                        <img class="ieee_web" src="images/corn.webp" alt="My_Work 1!">
                        <div class="layer">
                            <h3>1) Corn</h3>
                            <p></p>
                            <!-- <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->
                        </div>
                    </div>
                    <div class="work">
                        <img class="clg_web" src="images/tommato.jpg" alt="My_Work 2!">
                        <div class="layer">
                            <h3>2) Tomato</h3>
                            <p></p>
                            <!-- <a href="#"><i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->
                        </div>
                    </div>
                    <div class="work">
                        <img src="images/Cucumber.webp" style="height: 400px;" alt="My_Work 3!">
                        <div class="layer">
                            <h3>3) Cucumber</h3>
                            <p></p>
                            <!-- <a href="#" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a> -->
                        </div>
                    </div>
                </div>
                <a href="https://www.google.com/search?client=firefox-b-d&q=best+crop+for+all+seasons" class="btn" target="_blank">See More</a>
            </div>
        </div>

        <div id="geolocation">
            <div class="container1">
                <h1 class="sub-title2">
                    Geolocation
                </h1>
                <p>Click the button given below to get your coordinates and city name:- </p>
                <button onclick="getLocation()">Try It</button>
                <p id="x"></p>
                <p>Get more information on the management of the crops from the weather in some of the main cities:-</p>
                <button id="in"><a href="../About us/info.html">Get Information</a></button>
            </div>
        </div>

        <div id="weather_forecast">
            <div class="container2">
                <h1 class="sub-title1">
                    Weather Forecast
                </h1>
                <div class="weather_box">
                    <form id="weatherForm">
                        <label for="cityInput">Enter your city:</label>
                        <input type="text" id="cityInput" placeholder="City name" required>
                        <br><button type="button" onclick="getWeather()">Get Weather</button>
                        <p id="weatherResults"></p>
                    </form>
                </div>
            </div>
        </div>

        <div id="irrigation_scheduler">
            <div class="container3">
                <h1 class="sub-title1">
                    Irrigation Scheduler
                </h1>
            </div>
            <div class="pro_points">
                <div class="left">
                    <img src="images/drip irrigation.jpg" alt="image">
                </div>
                <div class="right">
                    <p>One of the best irrigation system is DRIP irrigation system and we only use Drip Irrigation!</p>
                    <h4>Pros of Drip Irrigation:-</h4>
                    <ol>
                        <li>No soil erosion</li>
                        <li>Reduces weeds</li>
                        <li>Water conservation</li>
                        <li>Water efficiency</li>
                        <li>Enhance crop yield</li>
                        <li>Works with low pressure</li>
                    </ol>
                </div>
            </div>
        </div>

        <div id="faq">
            <section class="faq" id="faq">
                <h2>Frequently Asked Questions</h2>
                <div class="faq-item">
                  <button class="faq-question" aria-expanded="true" aria-controls="answer-1">1. What is irrigation scheduling and why is it important for farmers?</button>
                  <div class="faq-answer" id="answer-1">
                    <p>Irrigation scheduling is the process of determining when and how much water to apply to crops in order to optimize their growth and yield. It is important for farmers because it helps to ensure efficient water use, reduce water waste, and maximize crop productivity.</p>
                  </div>
                </div>
                <div class="faq-item">
                  <button class="faq-question" aria-expanded="false" aria-controls="answer-2">2. How does weather forecast play a role in irrigation scheduling?</button>
                  <div class="faq-answer" id="answer-2">
                    <p>The weather forecast is a key factor in irrigation scheduling as it provides valuable information about upcoming weather conditions, such as temperature, humidity, and precipitation. This information can help farmers determine the ideal timing and amount of water to apply to their crops.
                    </p>
                  </div>
                </div>
                <div class="faq-item">
                  <button class="faq-question" aria-expanded="false" aria-controls="answer-3">3. How can your website help farmers improve their irrigation schedule using weather predictions?
                  </button>
                  <div class="faq-answer" id="answer-3">
                    <p>Our website utilizes real-time weather data and advanced algorithms to generate personalized irrigation schedules for farmers. By inputting their crop type, soil type, and location, farmers can receive accurate and timely recommendations for when and how much to irrigate their crops based on current and forecasted weather conditions.
                    </p>
                  </div>
                </div>
                <div class="faq-item">
                  <button class="faq-question" aria-expanded="false" aria-controls="answer-4">4. How can farmers get started using your irrigation scheduling website?
                  </button>
                  <div class="faq-answer" id="answer-4">
                    <p>Farmers can create a free account on our website and input their crop type, soil type, and location to receive personalized irrigation schedules. They can also contact us for any further assistance or questions about using our website. 
                    </p>
                  </div>
                </div>
                <div class="faq-item">
                  <button class="faq-question" aria-expanded="false" aria-controls="answer-5">5. How often should farmers check the irrigation schedule on your website?
                  </button>
                  <div class="faq-answer" id="answer-5">
                    <p>We recommend checking the irrigation schedule on our website at least once a week, or more frequently if there are significant changes in weather forecast or crop growth.
                    </p>
                  </div>
                </div>
                <div class="faq-item">
                  <button class="faq-question" aria-expanded="false" aria-controls="answer-6">6. Is there a cost to use your website?
                  </button>
                  <div class="faq-answer" id="answer-6">
                    <p>Our website is currently free to use, but we may offer premium features in the future for a fee. 
                    </p>
                  </div>
                </div>
                <div class="faq-item">
                  <button class="faq-question" aria-expanded="false" aria-controls="answer-7">7. Can I access the website on my mobile device?
                  </button>
                  <div class="faq-answer" id="answer-7">
                    <p>Yes, our website is mobile-friendly and can be accessed on any device with an internet connection.
                    </p>
                  </div>
                </div>
              </section>
        </div>
        <div id="contact">
            
        </div>





    <!-- ---------------------------- FOOTER ----------------------------  -->

    <footer>
        <div class="container">
            <div class="academics">
                <h4>About this website</h4>
                <a href="#home1">Home</a><br>
                <a href="../About us/aboutus.html">About Us</a><br>
                <a href="../About us/info.html">Services</a><br>
                <a href="#faq">FAQ</a><br>
                <a href="#geolocation">Other Options</a><br>
                </p>
            </div>
            <div class="connect">
                <h4>Connect</h4>
                <p class="face"><a href="#"><i class="fab fa-facebook"></i>Facebook</a><br></p>
                <p class="twitter"><a href="#"><i class="fab fa-twitter"></i>Twitter</a><br></p>
                <p class="you"><a href="#"><i class="fab fa-youtube"></i>YouTube</a><br></p>
                <p class="insta"><a href="#"><i class="fab fa-instagram"></i>Instagram</a><br></p>
                <p class="linked"><a href="#"><i class="fab fa-linkedin"></i>LinkedIn</a><br></p>
            </div>
            <div class="contact">
                <h4>Contact</h4>
                <h3>Pillai college of Engineering</h3>
                <h5>since 1999</h5>
                <p>
                <pre>Dr. K. M. Vasudevan Pillai Campus
Plot No. 10, Sector 16, New Panvel ,
Navi Mumbai, Mumbai – 410 206,
Maharashtra, India.
                    </pre>
                </p>
            </div>
            <div class="map">
                <pre>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.6693333701596!2d73.12540899129807!3d18.99020544053453!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai%20College%20of%20Engineering%2C%20New%20Panvel%20(Autonomous)!5e0!3m2!1sen!2sin!4v1707763705177!5m2!1sen!2sin" width="350" height="230" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </pre>
            </div>
            <div class="icon_inline">
                <h2>Connect:-</h2>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

    <div class="footer2">
        <p>Made with <i class="fa-solid fa-heart"></i> by second year Computer students from Pillai College of
            Engineering.</p>
    </div>





    <!-- ---------------------------- JavaScript ---------------------------- -->


    <!-- ------------------- SCROLLING ------------------- -->

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                const navbarHeight = 130; // Adjust this value based on your fixed navbar height
                const offsetTop = targetSection.offsetTop - navbarHeight;

                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
          });
        });
    </script>

    <!-- --------------------- CLOCK --------------------- -->
    
    <script>
        function updateClock() {

            const now = new Date();

            const monthNames = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December",
            ];

            const dayOfWeek = new Intl.DateTimeFormat("en", { weekday: "long" }).format(
                now
            );
            const month = monthNames[now.getMonth()];
            const day = now.getDate();
            const year = now.getFullYear();
            let hours = now.getHours();
            let minutes = now.getMinutes();
            let seconds = now.getSeconds();
            const ampm = hours >= 12 ? "PM" : "AM";

            const formattedHours = (hours % 12 || 12).toString().padStart(2, "0");

            minutes = minutes.toString().padStart(2, "0");
            seconds = seconds.toString().padStart(2, "0");

            const formattedTime = `${dayOfWeek}, ${month} ${day}, ${year} ${formattedHours}:${minutes}:${seconds} ${ampm}`;

            document.getElementById("currentTime").innerHTML = formattedTime;
        }

        updateClock();

        setInterval(updateClock, 1000);
    </script>

    <!-- --------------- CHANGE FONT SIZE --------------- -->

    <script>
        
    //     $(document).ready(function () {
    //     // Get the default font size when the document is ready
    //     var defaultFontSize = parseInt($('body').css('font-size'));

    //     // Increase font size
    //     $('.fontSizeControls .fa-plus').on('click', function () {
    //         changeFontSize(20); // You can adjust the step size as needed
    //     });

    //     // Decrease font size
    //     $('.fontSizeControls .fa-minus').on('click', function () {
    //         changeFontSize(-20); // You can adjust the step size as needed
    //     });

    //     // Function to change the font size
    //     function changeFontSize(step) {
    //         var currentFontSize = parseInt($('body').css('font-size'));
    //         var newFontSize = currentFontSize + step;
    //         $('body').css('font-size', newFontSize + 'px');
    //     }
    // });

    </script>

    <!-- --------------- ALERT OF LANGUAGE CHANGE --------------- -->

    <script>
        function showAlert() {
            alert("तुम्हाला वेबसाइटची भाषा मराठीत बदलायची आहे का?");
        }

        var myLink = document.getElementById("languageLink");

        myLink.addEventListener("click", showAlert);
    </script>

    <!-- ---------------- SIDE NAVBAR FOR MOBILE ---------------- -->

    <script>
        var sidemeu = document.getElementById("sidemenu");

        function openmenu() {
            sidemeu.style.right = "0";
        }
        function closemenu() {
            sidemeu.style.right = "-200px";
        }
    </script>

    <!-- ---------------------- SLIDESHOW ---------------------- -->

    <script>

        let currentSlideIndex = 1;
        showSlides();

        // Next/previous controls
        function plusSlides(n) {
        showSlides(currentSlideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
        showSlides(currentSlideIndex = n);
        }

        function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");

        if (n) {
            currentSlideIndex = n;
        } else {
            currentSlideIndex++;
        }

        if (currentSlideIndex > slides.length) {
            currentSlideIndex = 1;
        }

        if (currentSlideIndex < 1) {
            currentSlideIndex = slides.length;
        }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[currentSlideIndex - 1].style.display = "block";
        dots[currentSlideIndex - 1].className += " active";

        setTimeout(showSlides, 3000); // Change image every 3 seconds
        }

    </script>

    <!-- ------------------ TO GET GEOLOCATION ------------------ -->

    <script>
        const x = document.getElementById("demo");
        
        function getLocation() {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showLocation);
          } else { 
            x.innerHTML = "Geolocation is not supported by this browser.";
          }
        }
        
        function showLocation(position) {
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;
        
          // Using OpenCage Geocoding API for reverse geocoding
          const apiKey = 'YOUR_OPENCAGE_API_KEY';
          const apiUrl = `https://api.opencagedata.com/geocode/v1/json?key=${apiKey}&q=${latitude}+${longitude}&pretty=1`;
        
          fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
              const city = data.results[0]?.components.city || "City Not Found";
              x.innerHTML = `Latitude: ${latitude}<br>Longitude: ${longitude}<br>City: ${city}`;
            })
            .catch(error => {
              console.error('Error fetching data:', error);
              x.innerHTML = `Latitude: ${latitude}<br>Longitude: ${longitude}<br>City: City not found`;
            });
        }
    </script>

    <!-- ------------------ FOR WEATHER FORECAST ------------------ -->

    <script>
        function getWeather() {
        const apiKey = '3a4c0d3e87aa45d388c8d5d8b4b3d5ca';
        const cityInput = document.getElementById('cityInput').value;

        const apiUrl = `https://api.openweathermap.org/data/2.5/forecast?q=${cityInput}&appid=${apiKey}`;

        fetch(apiUrl)
            .then(response => response.json())
            .then(data => displayWeather(data))
            .catch(error => console.error('Error fetching weather data:', error));
        }

        function displayWeather(data) {
            const weatherResults = document.getElementById('weatherResults');

            if (data.cod === '200') {
                // Clear previous results
                weatherResults.innerHTML = '';

                // Display weather information for today, tomorrow, and the day after tomorrow
                for (let i = 0; i < 3; i++) {
                    const forecast = data.list[i * 8]; // Jump to the next day
                    const date = new Date(forecast.dt * 1000);
                    const dayOfWeek = new Intl.DateTimeFormat('en', { weekday: 'long' }).format(date);
                    const formattedDate = `(${date.getDate().toString().padStart(2, '0')}/${(date.getMonth() + 1).toString().padStart(2, '0')}/${date.getFullYear()})`;

                    // Convert temperature from Kelvin to Celsius
                    const temperatureCelsius = (forecast.main.temp - 273.15).toFixed(2);

                    const weatherInfo = `
                        <div class="weather-card">
                            <p>${dayOfWeek}, ${formattedDate}</p>
                            <p>Temperature: ${temperatureCelsius}°C</p>
                            <p>Weather: ${forecast.weather[0].description}</p>
                        </div>
                    `;

                    weatherResults.innerHTML += weatherInfo;
                }
            } else {
                // Display error message
                weatherResults.innerHTML = `<p>Error: ${data.message}</p>`;
            }
        }
    </script>

    <!-- ---------------------- FAQ SCRIPT ---------------------- -->

    <script>
        const faqItems = document.querySelectorAll(".faq-item");
  
        faqItems.forEach((faqItem, index) => {
          const isActive = index === 0;
          faqItem.classList.toggle("active", isActive);
  
          const question = faqItem.querySelector(".faq-question");
          const answer = faqItem.querySelector(".faq-answer");
  
          question.addEventListener("click", () => {
            faqItem.classList.toggle("active");
          question.setAttribute("aria-expanded", faqItem.classList.contains("active"));
          answer.setAttribute("aria-hidden", !faqItem.classList.contains("active")); //This informs assistive technologies about the expanded/collapsed state of each answer
          });
        }); 
      </script>



</body>

</html>
