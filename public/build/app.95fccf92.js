(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _controllers_hello_controller__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./controllers/hello_controller */ "./assets/controllers/hello_controller.js");
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_styles_app_scss__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _styles_autre_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/autre.css */ "./assets/styles/autre.css");
/* harmony import */ var _js_app_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/app.js */ "./assets/js/app.js");
/* harmony import */ var _js_app_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_js_app_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _greet__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./greet */ "./assets/greet.js");






jquery__WEBPACK_IMPORTED_MODULE_4___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_4___default()('body').prepend('<h1>' + (0,_greet__WEBPACK_IMPORTED_MODULE_5__["default"])('jill') + '</h1>');
});
console.log('ca marche js ok ?');

/***/ }),

/***/ "./assets/controllers/hello_controller.js":
/*!************************************************!*\
  !*** ./assets/controllers/hello_controller.js ***!
  \************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }


/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */

var _default = /*#__PURE__*/function (_Controller) {
  _inherits(_default, _Controller);

  var _super = _createSuper(_default);

  function _default() {
    _classCallCheck(this, _default);

    return _super.apply(this, arguments);
  }

  _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.element.textContent = 'Hello Stimulus! Edit me in assets/controllers/hello_controller.js';
    }
  }]);

  return _default;
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_0__.Controller);



/***/ }),

/***/ "./assets/greet.js":
/*!*************************!*\
  !*** ./assets/greet.js ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* export default binding */ __WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ function __WEBPACK_DEFAULT_EXPORT__(name) {
  return "Yo yo ".concat(name, " - welcome to Encore!");
}
;

/***/ }),

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
// This is for able to see chart. We are using Apex Chart. U can check the documentation of Apex Charts too..
// assets/app.js

/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
var options = {
  series: [{
    name: "Net Profit",
    data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
  }, {
    name: "Revenue",
    data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
  }, {
    name: "Free Cash Flow",
    data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
  }],
  chart: {
    type: "bar",
    height: 250,
    // make this 250
    sparkline: {
      enabled: true // make this true

    }
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: "55%",
      endingShape: "rounded"
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    show: true,
    width: 2,
    colors: ["transparent"]
  },
  yaxis: {
    title: {
      text: "$ (thousands)"
    }
  },
  fill: {
    opacity: 1
  },
  tooltip: {
    y: {
      formatter: function formatter(val) {
        return "$ " + val + " thousands";
      }
    }
  }
};
var chart = new ApexCharts(document.querySelector("#apex1"), options);
chart.render(); // Sidebar Toggle Codes;

var sidebarOpen = false;
var sidebar = document.getElementById("sidebar");
var sidebarCloseIcon = document.getElementById("sidebarIcon");

function toggleSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add("sidebar_responsive");
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove("sidebar_responsive");
    sidebarOpen = false;
  }
} //let buttonCheck = 1;
//buttonCheck = document.getElementById('buttonCheck');
//buttonCheck.addEventListener('click', event =>
//  buttonCheck = 0
//)
//
//console.log$('event');


$(document).ready(function () {
  console.log("jquery ok ?");
});
console.log('ca marche js ?'); //decalaration de variable pour l'activité des permissions et des boutons pour event
//selection de l'activite dans la base de données de l'activité des permissions
//si la valeur de l'activité des permissions est 0 (bool) et si on clique sur valider le formulaire
//alors la valeur passe a 1 dans la base de données et dans l'affichage
//sinon elle reste à 0 alors bouchon gris desactivé

/***/ }),

/***/ "./assets/styles/autre.css":
/*!*********************************!*\
  !*** ./assets/styles/autre.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nHookWebpackError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n1 │ @import \"/node_modules/bootstrap/dist/css/bootstrap-grid.min.css \";\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  assets\\styles\\app.scss 1:9  root stylesheet\n    at tryRunOrWebpackError (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\HookWebpackError.js:88:9)\n    at __webpack_require_module__ (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:5055:12)\n    at __webpack_require__ (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:5012:18)\n    at D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:5083:20\n    at symbolIterator (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\neo-async\\async.js:3485:9)\n    at done (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\neo-async\\async.js:3527:9)\n    at Hook.eval [as callAsync] (eval at create (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:15:1)\n    at Hook.CALL_ASYNC_DELEGATE [as _callAsync] (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\tapable\\lib\\Hook.js:18:14)\n    at D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:4990:43\n    at symbolIterator (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\neo-async\\async.js:3482:9)\n-- inner error --\nError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n1 │ @import \"/node_modules/bootstrap/dist/css/bootstrap-grid.min.css \";\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  assets\\styles\\app.scss 1:9  root stylesheet\n    at Object.<anonymous> (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\css-loader\\dist\\cjs.js??ruleSet[1].rules[4].oneOf[1].use[1]!D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\resolve-url-loader\\index.js??ruleSet[1].rules[4].oneOf[1].use[2]!D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\sass-loader\\dist\\cjs.js??ruleSet[1].rules[4].oneOf[1].use[3]!D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\assets\\styles\\app.scss:1:7)\n    at D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\javascript\\JavascriptModulesPlugin.js:441:11\n    at Hook.eval [as call] (eval at create (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\tapable\\lib\\HookCodeFactory.js:19:10), <anonymous>:7:1)\n    at Hook.CALL_DELEGATE [as _call] (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\tapable\\lib\\Hook.js:14:14)\n    at D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:5057:39\n    at tryRunOrWebpackError (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\HookWebpackError.js:83:7)\n    at __webpack_require_module__ (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:5055:12)\n    at __webpack_require__ (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:5012:18)\n    at D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\webpack\\lib\\Compilation.js:5083:20\n    at symbolIterator (D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\neo-async\\async.js:3485:9)\n\nGenerated code for D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\css-loader\\dist\\cjs.js??ruleSet[1].rules[4].oneOf[1].use[1]!D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\resolve-url-loader\\index.js??ruleSet[1].rules[4].oneOf[1].use[2]!D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\node_modules\\sass-loader\\dist\\cjs.js??ruleSet[1].rules[4].oneOf[1].use[3]!D:\\FORMATION\\logiciel_utiles\\XAMPP8.1.6\\htdocs\\symfonyECF\\assets\\styles\\app.scss\n1 | throw new Error(\"Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\\nSassError: Can't find stylesheet to import.\\n  ╷\\n1 │ @import \\\"/node_modules/bootstrap/dist/css/bootstrap-grid.min.css \\\";\\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\\n  ╵\\n  assets\\\\styles\\\\app.scss 1:9  root stylesheet\");");

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_hotwired_stimulus_dist_stimulus_js-node_modules_jquery_dist_jquery_js-no-6be982"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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SUFBSUMsV0FBVyxHQUFHLEtBQWxCO0FBQ0EsSUFBSUMsT0FBTyxHQUFHeEMsUUFBUSxDQUFDeUMsY0FBVCxDQUF3QixTQUF4QixDQUFkO0FBQ0EsSUFBSUMsZ0JBQWdCLEdBQUcxQyxRQUFRLENBQUN5QyxjQUFULENBQXdCLGFBQXhCLENBQXZCOztBQUVBLFNBQVNFLGFBQVQsR0FBeUI7RUFDdkIsSUFBSSxDQUFDSixXQUFMLEVBQWtCO0lBQ2hCQyxPQUFPLENBQUNJLFNBQVIsQ0FBa0JDLEdBQWxCLENBQXNCLG9CQUF0QjtJQUNBTixXQUFXLEdBQUcsSUFBZDtFQUNEO0FBQ0Y7O0FBRUQsU0FBU08sWUFBVCxHQUF3QjtFQUN0QixJQUFJUCxXQUFKLEVBQWlCO0lBQ2ZDLE9BQU8sQ0FBQ0ksU0FBUixDQUFrQkcsTUFBbEIsQ0FBeUIsb0JBQXpCO0lBQ0FSLFdBQVcsR0FBRyxLQUFkO0VBQ0Q7QUFDRixFQUVEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBOzs7QUFFQXpDLENBQUMsQ0FBQ0UsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtFQUMxQkUsT0FBTyxDQUFDQyxHQUFSLENBQVksYUFBWjtBQUVELENBSEQ7QUFLQUQsT0FBTyxDQUFDQyxHQUFSLENBQVksZ0JBQVosR0FFQTtBQUdBO0FBQ0E7QUFDQTtBQUNBOzs7Ozs7Ozs7Ozs7QUM3R0YiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9ncmVldC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvYXBwLmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9zdHlsZXMvYXV0cmUuY3NzPzIwMGMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXInO1xuaW1wb3J0ICcuL3N0eWxlcy9hcHAuc2Nzcyc7XG5pbXBvcnQgJy4vc3R5bGVzL2F1dHJlLmNzcyc7XG5pbXBvcnQgJy4vanMvYXBwLmpzJztcbmltcG9ydCAkIGZyb20gJ2pxdWVyeSc7XG5pbXBvcnQgZ3JlZXQgZnJvbSAnLi9ncmVldCc7XG5cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAkKCdib2R5JykucHJlcGVuZCgnPGgxPicgKyBncmVldCgnamlsbCcpICsgJzwvaDE+Jyk7XG4gfSlcbmNvbnNvbGUubG9nKCdjYSBtYXJjaGUganMgb2sgPycpO1xuXG5cblxuXG5cblxuXG5cbiIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuXG4vKlxuICogVGhpcyBpcyBhbiBleGFtcGxlIFN0aW11bHVzIGNvbnRyb2xsZXIhXG4gKlxuICogQW55IGVsZW1lbnQgd2l0aCBhIGRhdGEtY29udHJvbGxlcj1cImhlbGxvXCIgYXR0cmlidXRlIHdpbGwgY2F1c2VcbiAqIHRoaXMgY29udHJvbGxlciB0byBiZSBleGVjdXRlZC4gVGhlIG5hbWUgXCJoZWxsb1wiIGNvbWVzIGZyb20gdGhlIGZpbGVuYW1lOlxuICogaGVsbG9fY29udHJvbGxlci5qcyAtPiBcImhlbGxvXCJcbiAqXG4gKiBEZWxldGUgdGhpcyBmaWxlIG9yIGFkYXB0IGl0IGZvciB5b3VyIHVzZSFcbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmVsZW1lbnQudGV4dENvbnRlbnQgPSAnSGVsbG8gU3RpbXVsdXMhIEVkaXQgbWUgaW4gYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMnO1xuICAgIH1cbn1cbiIsIlxyXG5leHBvcnQgZGVmYXVsdCBmdW5jdGlvbiAobmFtZSkge1xyXG4gICAgcmV0dXJuIGBZbyB5byAke25hbWV9IC0gd2VsY29tZSB0byBFbmNvcmUhYDtcclxufTtcclxuXHJcblxyXG4iLCIvLyBUaGlzIGlzIGZvciBhYmxlIHRvIHNlZSBjaGFydC4gV2UgYXJlIHVzaW5nIEFwZXggQ2hhcnQuIFUgY2FuIGNoZWNrIHRoZSBkb2N1bWVudGF0aW9uIG9mIEFwZXggQ2hhcnRzIHRvby4uXHJcbi8vIGFzc2V0cy9hcHAuanNcclxuLypcclxuICogV2VsY29tZSB0byB5b3VyIGFwcCdzIG1haW4gSmF2YVNjcmlwdCBmaWxlIVxyXG4gKlxyXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXHJcbiAqIChhbmQgaXRzIENTUyBmaWxlKSBpbiB5b3VyIGJhc2UgbGF5b3V0IChiYXNlLmh0bWwudHdpZykuXHJcbiAqL1xyXG5cclxudmFyIG9wdGlvbnMgPSB7XHJcbiAgICBzZXJpZXM6IFtcclxuICAgICAge1xyXG4gICAgICAgIG5hbWU6IFwiTmV0IFByb2ZpdFwiLFxyXG4gICAgICAgIGRhdGE6IFs0NCwgNTUsIDU3LCA1NiwgNjEsIDU4LCA2MywgNjAsIDY2XSxcclxuICAgICAgfSxcclxuICAgICAge1xyXG4gICAgICAgIG5hbWU6IFwiUmV2ZW51ZVwiLFxyXG4gICAgICAgIGRhdGE6IFs3NiwgODUsIDEwMSwgOTgsIDg3LCAxMDUsIDkxLCAxMTQsIDk0XSxcclxuICAgICAgfSxcclxuICAgICAge1xyXG4gICAgICAgIG5hbWU6IFwiRnJlZSBDYXNoIEZsb3dcIixcclxuICAgICAgICBkYXRhOiBbMzUsIDQxLCAzNiwgMjYsIDQ1LCA0OCwgNTIsIDUzLCA0MV0sXHJcbiAgICAgIH0sXHJcbiAgICBdLFxyXG4gICAgY2hhcnQ6IHtcclxuICAgICAgdHlwZTogXCJiYXJcIixcclxuICAgICAgaGVpZ2h0OiAyNTAsIC8vIG1ha2UgdGhpcyAyNTBcclxuICAgICAgc3BhcmtsaW5lOiB7XHJcbiAgICAgICAgZW5hYmxlZDogdHJ1ZSwgLy8gbWFrZSB0aGlzIHRydWVcclxuICAgICAgfSxcclxuICAgIH0sXHJcbiAgICBwbG90T3B0aW9uczoge1xyXG4gICAgICBiYXI6IHtcclxuICAgICAgICBob3Jpem9udGFsOiBmYWxzZSxcclxuICAgICAgICBjb2x1bW5XaWR0aDogXCI1NSVcIixcclxuICAgICAgICBlbmRpbmdTaGFwZTogXCJyb3VuZGVkXCIsXHJcbiAgICAgIH0sXHJcbiAgICB9LFxyXG4gICAgZGF0YUxhYmVsczoge1xyXG4gICAgICBlbmFibGVkOiBmYWxzZSxcclxuICAgIH0sXHJcbiAgICBzdHJva2U6IHtcclxuICAgICAgc2hvdzogdHJ1ZSxcclxuICAgICAgd2lkdGg6IDIsXHJcbiAgICAgIGNvbG9yczogW1widHJhbnNwYXJlbnRcIl0sXHJcbiAgICB9LFxyXG4gICAgXHJcbiAgICB5YXhpczoge1xyXG4gICAgICB0aXRsZToge1xyXG4gICAgICAgIHRleHQ6IFwiJCAodGhvdXNhbmRzKVwiLFxyXG4gICAgICB9LFxyXG4gICAgfSxcclxuICAgIGZpbGw6IHtcclxuICAgICAgb3BhY2l0eTogMSxcclxuICAgIH0sXHJcbiAgICB0b29sdGlwOiB7XHJcbiAgICAgIHk6IHtcclxuICAgICAgICBmb3JtYXR0ZXI6IGZ1bmN0aW9uICh2YWwpIHtcclxuICAgICAgICAgIHJldHVybiBcIiQgXCIgKyB2YWwgKyBcIiB0aG91c2FuZHNcIjtcclxuICAgICAgICB9LFxyXG4gICAgICB9LFxyXG4gICAgfSxcclxuICB9O1xyXG4gIFxyXG4gIHZhciBjaGFydCA9IG5ldyBBcGV4Q2hhcnRzKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjYXBleDFcIiksIG9wdGlvbnMpO1xyXG4gIGNoYXJ0LnJlbmRlcigpO1xyXG4gIFxyXG4gIC8vIFNpZGViYXIgVG9nZ2xlIENvZGVzO1xyXG4gIFxyXG4gIHZhciBzaWRlYmFyT3BlbiA9IGZhbHNlO1xyXG4gIHZhciBzaWRlYmFyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJzaWRlYmFyXCIpO1xyXG4gIHZhciBzaWRlYmFyQ2xvc2VJY29uID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoXCJzaWRlYmFySWNvblwiKTtcclxuICBcclxuICBmdW5jdGlvbiB0b2dnbGVTaWRlYmFyKCkge1xyXG4gICAgaWYgKCFzaWRlYmFyT3Blbikge1xyXG4gICAgICBzaWRlYmFyLmNsYXNzTGlzdC5hZGQoXCJzaWRlYmFyX3Jlc3BvbnNpdmVcIik7XHJcbiAgICAgIHNpZGViYXJPcGVuID0gdHJ1ZTtcclxuICAgIH1cclxuICB9XHJcbiAgXHJcbiAgZnVuY3Rpb24gY2xvc2VTaWRlYmFyKCkge1xyXG4gICAgaWYgKHNpZGViYXJPcGVuKSB7XHJcbiAgICAgIHNpZGViYXIuY2xhc3NMaXN0LnJlbW92ZShcInNpZGViYXJfcmVzcG9uc2l2ZVwiKTtcclxuICAgICAgc2lkZWJhck9wZW4gPSBmYWxzZTtcclxuICAgIH1cclxuICB9XHJcbiAgXHJcbiAgLy9sZXQgYnV0dG9uQ2hlY2sgPSAxO1xyXG4gIC8vYnV0dG9uQ2hlY2sgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnV0dG9uQ2hlY2snKTtcclxuICAvL2J1dHRvbkNoZWNrLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZXZlbnQgPT5cclxuICAvLyAgYnV0dG9uQ2hlY2sgPSAwXHJcbiAgLy8pXHJcbiAgLy9cclxuICBcclxuICAvL2NvbnNvbGUubG9nJCgnZXZlbnQnKTtcclxuICBcclxuICAkKGRvY3VtZW50KS5yZWFkeShmdW5jdGlvbigpe1xyXG4gICAgY29uc29sZS5sb2coXCJqcXVlcnkgb2sgP1wiKVxyXG4gICAgXHJcbiAgfSk7XHJcbiAgXHJcbiAgY29uc29sZS5sb2coJ2NhIG1hcmNoZSBqcyA/Jyk7XHJcbiAgXHJcbiAgLy9kZWNhbGFyYXRpb24gZGUgdmFyaWFibGUgcG91ciBsJ2FjdGl2aXTDqSBkZXMgcGVybWlzc2lvbnMgZXQgZGVzIGJvdXRvbnMgcG91ciBldmVudFxyXG4gIFxyXG4gIFxyXG4gIC8vc2VsZWN0aW9uIGRlIGwnYWN0aXZpdGUgZGFucyBsYSBiYXNlIGRlIGRvbm7DqWVzIGRlIGwnYWN0aXZpdMOpIGRlcyBwZXJtaXNzaW9uc1xyXG4gIC8vc2kgbGEgdmFsZXVyIGRlIGwnYWN0aXZpdMOpIGRlcyBwZXJtaXNzaW9ucyBlc3QgMCAoYm9vbCkgZXQgc2kgb24gY2xpcXVlIHN1ciB2YWxpZGVyIGxlIGZvcm11bGFpcmVcclxuICAvL2Fsb3JzIGxhIHZhbGV1ciBwYXNzZSBhIDEgZGFucyBsYSBiYXNlIGRlIGRvbm7DqWVzIGV0IGRhbnMgbCdhZmZpY2hhZ2VcclxuICAvL3Npbm9uIGVsbGUgcmVzdGUgw6AgMCBhbG9ycyBib3VjaG9uIGdyaXMgZGVzYWN0aXbDqSIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyIkIiwiZ3JlZXQiLCJkb2N1bWVudCIsInJlYWR5IiwicHJlcGVuZCIsImNvbnNvbGUiLCJsb2ciLCJDb250cm9sbGVyIiwiZWxlbWVudCIsInRleHRDb250ZW50IiwibmFtZSIsIm9wdGlvbnMiLCJzZXJpZXMiLCJkYXRhIiwiY2hhcnQiLCJ0eXBlIiwiaGVpZ2h0Iiwic3BhcmtsaW5lIiwiZW5hYmxlZCIsInBsb3RPcHRpb25zIiwiYmFyIiwiaG9yaXpvbnRhbCIsImNvbHVtbldpZHRoIiwiZW5kaW5nU2hhcGUiLCJkYXRhTGFiZWxzIiwic3Ryb2tlIiwic2hvdyIsIndpZHRoIiwiY29sb3JzIiwieWF4aXMiLCJ0aXRsZSIsInRleHQiLCJmaWxsIiwib3BhY2l0eSIsInRvb2x0aXAiLCJ5IiwiZm9ybWF0dGVyIiwidmFsIiwiQXBleENoYXJ0cyIsInF1ZXJ5U2VsZWN0b3IiLCJyZW5kZXIiLCJzaWRlYmFyT3BlbiIsInNpZGViYXIiLCJnZXRFbGVtZW50QnlJZCIsInNpZGViYXJDbG9zZUljb24iLCJ0b2dnbGVTaWRlYmFyIiwiY2xhc3NMaXN0IiwiYWRkIiwiY2xvc2VTaWRlYmFyIiwicmVtb3ZlIl0sInNvdXJjZVJvb3QiOiIifQ==