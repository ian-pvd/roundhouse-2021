/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "wp-content/themes/roundhouse/assets/dist/";
/******/
/******/
/******/ 	// webpack-livereload-plugin
/******/ 	(function() {
/******/ 	  if (typeof window === "undefined") { return };
/******/ 	  var id = "webpack-livereload-plugin-script-ca8d5315c7213bf7";
/******/ 	  if (document.getElementById(id)) { return; }
/******/ 	  var el = document.createElement("script");
/******/ 	  el.id = id;
/******/ 	  el.async = true;
/******/ 	  el.src = "//localhost:35729/livereload.js";
/******/ 	  document.getElementsByTagName("head")[0].appendChild(el);
/******/ 	}());
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./assets/src/site/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/src/site/index.js":
/*!**********************************!*\
  !*** ./assets/src/site/index.js ***!
  \**********************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _js_toggleMobileNav__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./js/toggleMobileNav */ \"./assets/src/site/js/toggleMobileNav.js\");\n/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./scss/index.scss */ \"./assets/src/site/scss/index.scss\");\n/* harmony import */ var _scss_index_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_scss_index_scss__WEBPACK_IMPORTED_MODULE_1__);\n/**\n * Site Entry Point\n */\n// Global Scripts\n // Global Styles\n\n // Enable HMR\n\nif (false) {} // Enquue Site JS Modules\n\n\ndocument.addEventListener('DOMContentLoaded', () => {\n  Object(_js_toggleMobileNav__WEBPACK_IMPORTED_MODULE_0__[\"default\"])();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9hc3NldHMvc3JjL3NpdGUvaW5kZXguanMuanMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvc3JjL3NpdGUvaW5kZXguanM/ZDM2MSJdLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIFNpdGUgRW50cnkgUG9pbnRcbiAqL1xuXG4vLyBHbG9iYWwgU2NyaXB0c1xuaW1wb3J0IHRvZ2dsZU1vYmlsZU5hdiBmcm9tICcuL2pzL3RvZ2dsZU1vYmlsZU5hdic7XG5cbi8vIEdsb2JhbCBTdHlsZXNcbmltcG9ydCAnLi9zY3NzL2luZGV4LnNjc3MnO1xuXG4vLyBFbmFibGUgSE1SXG5pZiAobW9kdWxlLmhvdCkge1xuICBtb2R1bGUuaG90LmFjY2VwdCgpO1xufVxuXG4vLyBFbnF1dWUgU2l0ZSBKUyBNb2R1bGVzXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgKCkgPT4ge1xuICB0b2dnbGVNb2JpbGVOYXYoKTtcbn0pO1xuIl0sIm1hcHBpbmdzIjoiQUFBQTtBQUFBO0FBQUE7QUFBQTtBQUFBOzs7QUFJQTtBQUNBO0FBQ0E7QUFFQTtBQUNBO0FBRUEsYUFFQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0EiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./assets/src/site/index.js\n");

/***/ }),

/***/ "./assets/src/site/js/toggleMobileNav.js":
/*!***********************************************!*\
  !*** ./assets/src/site/js/toggleMobileNav.js ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/**\n * Toggle Mobile Nav\n *\n * Enables slide out mobile nav menu and toggle button interactivity.\n */\nconst toggleMobileNav = () => {\n  const menuToggle = document.getElementById('mobile-nav-toggle');\n  const pageWrapper = document.getElementById('page');\n\n  if (menuToggle && pageWrapper) {\n    menuToggle.addEventListener('click', e => {\n      pageWrapper.classList.toggle('toggle__mobile-nav--active');\n      menuToggle.setAttribute('aria-expanded', `${'true' !== menuToggle.getAttribute('aria-expanded')}`);\n      e.preventDefault();\n    });\n  }\n};\n\n/* harmony default export */ __webpack_exports__[\"default\"] = (toggleMobileNav);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9hc3NldHMvc3JjL3NpdGUvanMvdG9nZ2xlTW9iaWxlTmF2LmpzLmpzIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3NyYy9zaXRlL2pzL3RvZ2dsZU1vYmlsZU5hdi5qcz8wOGQ4Il0sInNvdXJjZXNDb250ZW50IjpbIi8qKlxuICogVG9nZ2xlIE1vYmlsZSBOYXZcbiAqXG4gKiBFbmFibGVzIHNsaWRlIG91dCBtb2JpbGUgbmF2IG1lbnUgYW5kIHRvZ2dsZSBidXR0b24gaW50ZXJhY3Rpdml0eS5cbiAqL1xuXG5jb25zdCB0b2dnbGVNb2JpbGVOYXYgPSAoKSA9PiB7XG4gIGNvbnN0IG1lbnVUb2dnbGUgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbW9iaWxlLW5hdi10b2dnbGUnKTtcbiAgY29uc3QgcGFnZVdyYXBwZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgncGFnZScpO1xuXG4gIGlmICgobWVudVRvZ2dsZSkgJiYgKHBhZ2VXcmFwcGVyKSkge1xuICAgIG1lbnVUb2dnbGUuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoZSkgPT4ge1xuICAgICAgcGFnZVdyYXBwZXIuY2xhc3NMaXN0LnRvZ2dsZSgndG9nZ2xlX19tb2JpbGUtbmF2LS1hY3RpdmUnKTtcbiAgICAgIG1lbnVUb2dnbGUuc2V0QXR0cmlidXRlKFxuICAgICAgICAnYXJpYS1leHBhbmRlZCcsXG4gICAgICAgIGAkeyd0cnVlJyAhPT0gbWVudVRvZ2dsZS5nZXRBdHRyaWJ1dGUoJ2FyaWEtZXhwYW5kZWQnKX1gXG4gICAgICApO1xuICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuICAgIH0pO1xuICB9XG59O1xuXG5leHBvcnQgZGVmYXVsdCB0b2dnbGVNb2JpbGVOYXY7XG4iXSwibWFwcGluZ3MiOiJBQUFBO0FBQUE7Ozs7O0FBTUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUlBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQSIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./assets/src/site/js/toggleMobileNav.js\n");

/***/ }),

/***/ "./assets/src/site/scss/index.scss":
/*!*****************************************!*\
  !*** ./assets/src/site/scss/index.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9hc3NldHMvc3JjL3NpdGUvc2Nzcy9pbmRleC5zY3NzLmpzIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3NyYy9zaXRlL3Njc3MvaW5kZXguc2Nzcz8zNzRmIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpbiJdLCJtYXBwaW5ncyI6IkFBQUEiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./assets/src/site/scss/index.scss\n");

/***/ })

/******/ });