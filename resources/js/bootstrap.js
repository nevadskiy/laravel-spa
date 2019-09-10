/**
 * Lodash configuration
 */
window._ = require('lodash');

/**
 * Axios configuration
 */
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
