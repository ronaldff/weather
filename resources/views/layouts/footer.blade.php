<footer>
  <p>&copy; <?php echo date('Y') ?> Created With 💖 By  &nbsp;<strong>Piyush Shyam</strong> </p>
</footer>
@include('layouts.footerlinks')
<script>
  $(document).ready(function(){
    $("#submitBtn").click(function(e){
      e.preventDefault();
      let cityname = $("#cityName").val();
      
      if(cityname === ''){
		$("#city-name").text("Please fill the city name")
      } else {
			async function showWeather() {
				
				let response = await fetch(`https://api.openweathermap.org/data/2.5/weather?q=${cityname}&units=metric&appid=66938d58beb273cc784d5eca5432f3e9`);
				let data = await response.json();

				if(data.cod === "404"){
					$("#city-name").text(data.message);

				} else if(data.cod === 200){
					$( ".middle-layer" ).removeClass( "data-hide");
					$("#cityName").val('');
					const weatherData = data,
						lat =  weatherData.coord.lat,
						lon =  weatherData.coord.lon,
						tempmods = weatherData.weather[0].main;
					$("#city-name").text(`${weatherData.name}, ${weatherData.sys.country}`);
					$("#temp span").text(weatherData.main.temp);

					switch (tempmods) {
						case "Clear":
							$("#temp-status").html('<i class="fas fa-sun" style="color:#eccc68" aria-hidden="true"></i>');
							break;
						case "Clouds":
							$("#temp-status").html('<i class="fas fa-cloud" style="color:#f1f2f6" aria-hidden="true"></i>');
							break;
						case "Rain":
							$("#temp-status").html('<i class="fas fa-cloud-rain" style="color:#a4b0be" aria-hidden="true"></i>');
							break;
						case "Mist":
							$("#temp-status").html("<img src='{{ asset('images/50n.png') }}'>");
							break;
						default:
							$("#temp-status").html('<i class="fas fa-cloud" style="color:#f1f2f6" aria-hidden="true"></i>');

					}


					$("#output").html(`<ul class="list-group">
                                <li class="list-group-item"><strong>Latitude :</strong> <span class="lat"></span></li>
                                <li class="list-group-item"><strong>Longitude :</strong><span class="lon"></span></li>
                                <li class="list-group-item"><strong>Sunrise :</strong><span class="sunrise"></span></li>
                                <li class="list-group-item"><strong>Sunset :</strong><span class="sunset"></span></li>
								<li class="list-group-item"><strong>Humidity :</strong><span class="humid"></span></li>
								<li class="list-group-item"><strong>Wind Speed :</strong><span class="wind"></span></li>

                            </ul>`);

					$(".lat").text(lat);
					$(".lon").text(lon); 
					let unix = weatherData.sys.sunrise; 
					let date = new Date(unix*1000); 
					let hours = date.getHours();
					let minutes = date.getMinutes();
					let ampm = hours >= 12 ? 'PM' : 'AM';
					hours = hours % 12;
					hours = hours ? hours : 12; // the hour '0' should be '12'
					minutes = minutes < 10 ? '0'+minutes : minutes;
					let strTime = hours + ':' + minutes + ' ' + ampm; 
					sunrise = strTime;

					let sunsetunix = weatherData.sys.sunset; 
					let sunsetdate = new Date(sunsetunix*1000); 
					let sunsethours = sunsetdate.getHours();
					let sunsetminutes = sunsetdate.getMinutes();
					let sunsetampm = sunsethours >= 12 ? 'PM' : 'AM';
					sunsethours = sunsethours % 12;
					sunsethours = sunsethours ? sunsethours : 12; // the hour '0' should be '12'
					sunsetminutes = sunsetminutes < 10 ? '0'+sunsetminutes : sunsetminutes;
					let sunsetstrTime = sunsethours + ':' + sunsetminutes + ' ' + sunsetampm;
					sunset = sunsetstrTime;
					$(".sunrise").text(sunrise);
					$(".sunset").text(sunset);
					$(".humid").text(weatherData.main.humidity + '%');
					let wind = Math.round(weatherData.wind.speed*1.609344);
					$(".wind").text(wind + 'Km/h');

					
				}
				
			}

			showWeather();
		}
		
		
    })
  });
</script>
