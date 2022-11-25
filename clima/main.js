const api = {
  key: 'ea2f32f675f220d5599ec25d670f9f11',
  url: `https://api.openweathermap.org/data/2.5/weather`
}

//se buscan los elementos ara mostrar
const card = document.getElementById('card')
const city = document.getElementById('city');
const date = document.getElementById('date');
const tempImg = document.getElementById('temp-img');
const temp = document.getElementById('temp');
const weather = document.getElementById('weather');
const range = document.getElementById('range');

function updateImages(data) {
  const temp = toCelsius(data.main.temp);
  let src = 'images/medio.gif';
  if (temp > 26) {
    src = 'images/caliente.gif';
  } else if (temp < 14) {
    src = 'images/frio.gif';
  }
  tempImg.src = src;
}

async function search(query) {
  try {
    const response = await fetch(`${api.url}?q=${query}&appid=${api.key}&lang=es`);//se usa la url para buscar la ciudad
    const data = await response.json();//pasa los datos
    card.style.display = 'block';
    city.innerHTML = `${data.name}, ${data.sys.country}`;
    data.innerHTML = (new Date()).toLocaleDateString();
    temp.innerHTML = `${toCelsius(data.main.temp)}c`;
    weather.innerHTML = data.weather[0].description;
    range.innerHTML = `${toCelsius(data.main.temp_min)}c / ${toCelsius(data.main.temp_max)}c`;
    updateImages(data);
  } catch (err) {
    console.log(err);
    alert('Hubo un error');
  }
}

function toCelsius(kelvin) {
  return Math.round(kelvin - 273.15);
}

function onSubmit(event) {
  event.preventDefault();
  search(searchbox.value);
}

const searchform = document.getElementById('search-form');//
const searchbox = document.getElementById('searchbox');
searchform.addEventListener('submit', onSubmit, true);//cuando se presiona el boton se pasa el true
