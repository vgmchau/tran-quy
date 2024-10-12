import { util } from './util.js';
import { guest } from './guest.js';
import { theme } from './theme.js';
import { audio } from './audio.js';
import { progress } from './progress.js';

document.addEventListener('DOMContentLoaded', () => {
    audio.init();
    theme.init();

    guest.init();
    progress.init();
    window.AOS.init();

    window.util = util;
    window.guest = guest;
    window.theme = theme;
    window.audio = audio;
});
