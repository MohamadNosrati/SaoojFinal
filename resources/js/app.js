import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import "lodash/lodash"
import "../../public/bootstrap/dist/js/bootstrap.bundle.min"
import "../../public/Persian_Calendar/dist/kamadatepicker.min"
kamaDatepicker("startFa")
kamaDatepicker("endFa")
