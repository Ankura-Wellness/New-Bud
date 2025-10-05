import { cartManager } from './njs/libs/cartManager.njs.js';
import { httpManager } from './njs/libs/httpManager.njs.js';
import { loadingManager } from './njs/libs/loadingManager.njs.js';
import { toastManager } from './njs/libs/toastManager.njs.js';

import { checkout } from './njs/components/checkout.njs.js';
import { cart } from './njs/components/cart.njs.js';
import { page } from './njs/components/page.njs.js';

export const nb = angular.module('nb', []);
nb.service('httpManager',httpManager);
nb.service('loadingManager',loadingManager);
nb.service('cartManager',cartManager);
nb.service('toastManager',toastManager);

nb.controller('page', page);
nb.controller('cart', cart);
nb.controller('checkout', checkout );