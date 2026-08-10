import $ from 'jquery';
import 'bootstrap';
import '../css/app.css';

window.$ = $;
window.jQuery = $;

$(function () {
    $('[data-confirm]').on('click', function (event) {
        if (!window.confirm($(this).data('confirm'))) {
            event.preventDefault();
        }
    });
});
