<section
        class="section section-lg section-main-bunner section-main-bunner-filter text-center text-lg-left"
      >
      
        <div
          class="cross-wrap cross-1"
          data-parallax-scroll='{"y": 60, "x": 0,  "smoothness": 50 }'
          style="
            transform: translate3d(0px, 53.503px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
            -webkit-transform: translate3d(0px, 53.503px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
          "
        >
        </div>
        <div
          class="cross-wrap cross-5"
          data-parallax-scroll='{"y": -100, "x": 0,  "smoothness": 70 }'
          style="
            transform: translate3d(0px, -89.101px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
            -webkit-transform: translate3d(0px, -89.101px, 0px) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
          "
        >

        </div>
        
        <div
          class="main-bunner-img"
          style="
            background-image: url('img/bg-banner-2.jpg');
            background-size: cover;
          "
        ></div>
        
        <div class="main-bunner-inner ">
        <img src="img/logobike.png" alt="" width="100" height="100" />

          <div class="container">
            <div class="row row-50 justify-content-lg-center align-items-lg-center">
              <div class="col-lg-12 ">
                <div class="banner-classic" >
                  <h2 class="banner-classic-subtitle ">
                    It's all about the ride
                  </h2>
                  <h1 class="banner-classic-title">
                    <span>Velo</span
                    ><span class="text-primary">App</span>
                  </h1>
                  <a class="button button-lg-custom button-primary" href="{{route('register')}}"
                    >Learn More</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-transform-top section-custom-1">
        <div class="container">
          <div class="box-countdown-dark">
            <div
              class="cross-wrap cross-2 cross-firefox-fix"
              data-parallax-scroll='{"y": -20, "x": 30,  "smoothness": 40 }'
              style="
                transform: translate3d(26.752px, -17.795px, 0px) rotateX(0deg)
                  rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
                -webkit-transform: translate3d(26.752px, -17.795px, 0px)
                  rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1)
                  scaleZ(1);
              "
            >
              <div class="cross">
                <span></span><span></span><span></span><span></span>
              </div>
            </div>
            <div
              class="cross-wrap cross-3 cross-firefox-fix"
              data-parallax-scroll='{"y": 20, "x": -30,  "smoothness": 40 }'
              style="
                transform: translate3d(-26.712px, 17.835px, 0px) rotateX(0deg)
                  rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1);
                -webkit-transform: translate3d(-26.712px, 17.835px, 0px)
                  rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1)
                  scaleZ(1);
              "
            >
              <div class="cross">
                <span></span><span></span><span></span><span></span>
              </div>
            </div>
            <div
              class="row row-30 align-items-center justify-content-xl-between"
            >
              <div class="col-lg-3 col-xl text-center text-lg-left">
                <h3>Next Ride</h3>
                <p class="text-opacity-80">
                  Feel free to take part in our upcoming bike ride!
                </p>
              </div>
              <div class="col-lg-6 col-xl-7">
                <div
                  class="countdown is-countdown"
                  data-type="until"
                  data-time="17 Oct 2019 16:00"
                  data-format="dhms"
                >
                  <span class="countdown-row countdown-show4"
                    ><span class="countdown-section"
                      ><span id="days" class="countdown-amount"></span
                      ><span class="countdown-period">Days</span></span
                    ><span class="countdown-section"
                      ><span id="hours" class="countdown-amount"></span
                      ><span class="countdown-period">Hours</span></span
                    ><span class="countdown-section"
                      ><span id="minutes" class="countdown-amount"></span
                      ><span class="countdown-period">Minutes</span></span
                    ><span class="countdown-section"
                      ><span  id="seconds" class="countdown-amount"></span
                      ><span class="countdown-period">Seconds</span></span
                    ></span>
                </div>
              </div>
              <div class="col-lg-3 col-xl">
                <a class="button button-primary button-lg button-block"  href="{{route('register')}}"
                  >Register</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>

<script>
      (function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy ,
      dayMonth = "10/25/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

      }, 0)
  }());
  </script>