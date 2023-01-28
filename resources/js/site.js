import Alpine from "alpinejs";
import focus from '@alpinejs/focus'
import mediumZoom from "medium-zoom";

window.Alpine = Alpine;
Alpine.start();
Alpine.plugin(focus)

mediumZoom("[data-zoomable]");
