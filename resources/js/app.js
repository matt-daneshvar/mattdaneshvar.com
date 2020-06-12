const feather = require('feather-icons')
const Turbolinks = require('turbolinks')
Turbolinks.start();
Turbolinks.setProgressBarDelay(300);

document.addEventListener("turbolinks:load", function() {
  feather.replace()

  if(typeof ga !== "function")
  {
    return;
  }

  ga("set", "location", event.data.url)
  ga("send", "pageview")
})
