import Alpine from "alpinejs";
import { Datepicker, Input, initTE } from "tw-elements";
initTE({ Datepicker, Input, Collapse, Dropdown, Carousel, Modal, Ripple });
window.Alpine = Alpine;

Alpine.start();
import { Collapse, Dropdown, Carousel, Modal, Ripple } from "tw-elements";

const datepickerDisablePast = document.getElementById(
    "datepicker-disable-past"
);
new Datepicker(datepickerDisablePast, {
    disablePast: true,
});
