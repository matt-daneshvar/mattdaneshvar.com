var Turbolinks = require('turbolinks')
Turbolinks.start();
Turbolinks.setProgressBarDelay(300);

document.addEventListener("turbolinks:load", function() {
  if(typeof ga !== "function")
  {
    return;
  }

  ga("set", "location", event.data.url)
  ga("send", "pageview")
})
