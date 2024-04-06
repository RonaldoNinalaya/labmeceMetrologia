// var BASE_URL = "<?php echo $url_base;?>";

import { fetchData } from "./index.js";
const urlRedes = "../json/redes-y-calidad.json";
fetchData(urlRedes, "producto--redes-calidad");

