import { cartManager } from './njs/libs/cartManager.njs.js';
import { httpManager } from './njs/libs/httpManager.njs.js';
import { loadingManager } from './njs/libs/loadingManager.njs.js';

import { checkout } from './njs/components/checkout.njs.js';
import { cart } from './njs/components/cart.njs.js';
import { page } from './njs/components/page.njs.js';

export const zsi = angular.module('zsi', []);
zsi.service('httpManager',httpManager);
zsi.service('loadingManager',loadingManager);
zsi.service('cartManager',cartManager);

zsi.controller('page', page);
zsi.controller('cart', cart);
zsi.controller('checkout', checkout );