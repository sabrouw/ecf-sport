(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var _styles_autre_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./styles/autre.css */ "./assets/styles/autre.css");
/* harmony import */ var _js_app_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/app.js */ "./assets/js/app.js");
/* harmony import */ var _js_app_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_js_app_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _controllers_hello_controller__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./controllers/hello_controller */ "./assets/controllers/hello_controller.js");
/* harmony import */ var _greet__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./greet */ "./assets/greet.js");






jquery__WEBPACK_IMPORTED_MODULE_3___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_3___default()('body').prepend('<h1>' + (0,_greet__WEBPACK_IMPORTED_MODULE_5__["default"])('jill') + '</h1>');
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

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./assets/styles/autre.css":
/*!*********************************!*\
  !*** ./assets/styles/autre.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_hotwired_stimulus_dist_stimulus_js-node_modules_jquery_dist_jquery_js-no-2ae741"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUFJQyxXQUFXLEdBQUcsS0FBbEI7QUFDQSxJQUFJQyxPQUFPLEdBQUd4QyxRQUFRLENBQUN5QyxjQUFULENBQXdCLFNBQXhCLENBQWQ7QUFDQSxJQUFJQyxnQkFBZ0IsR0FBRzFDLFFBQVEsQ0FBQ3lDLGNBQVQsQ0FBd0IsYUFBeEIsQ0FBdkI7O0FBRUEsU0FBU0UsYUFBVCxHQUF5QjtFQUN2QixJQUFJLENBQUNKLFdBQUwsRUFBa0I7SUFDaEJDLE9BQU8sQ0FBQ0ksU0FBUixDQUFrQkMsR0FBbEIsQ0FBc0Isb0JBQXRCO0lBQ0FOLFdBQVcsR0FBRyxJQUFkO0VBQ0Q7QUFDRjs7QUFFRCxTQUFTTyxZQUFULEdBQXdCO0VBQ3RCLElBQUlQLFdBQUosRUFBaUI7SUFDZkMsT0FBTyxDQUFDSSxTQUFSLENBQWtCRyxNQUFsQixDQUF5QixvQkFBekI7SUFDQVIsV0FBVyxHQUFHLEtBQWQ7RUFDRDtBQUNGLEVBRUQ7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBRUE7OztBQUVBekMsQ0FBQyxDQUFDRSxRQUFELENBQUQsQ0FBWUMsS0FBWixDQUFrQixZQUFVO0VBQzFCRSxPQUFPLENBQUNDLEdBQVIsQ0FBWSxhQUFaO0FBRUQsQ0FIRDtBQUtBRCxPQUFPLENBQUNDLEdBQVIsQ0FBWSxnQkFBWixHQUVBO0FBR0E7QUFDQTtBQUNBO0FBQ0E7Ozs7Ozs7Ozs7OztBQzdHRjs7Ozs7Ozs7Ozs7OztBQ0FBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvY29udHJvbGxlcnMvaGVsbG9fY29udHJvbGxlci5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvZ3JlZXQuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hdXRyZS5jc3MiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcbmltcG9ydCAnLi9zdHlsZXMvYXV0cmUuY3NzJztcbmltcG9ydCAnLi9qcy9hcHAuanMnO1xuaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcbmltcG9ydCAnLi9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyJztcbmltcG9ydCBncmVldCBmcm9tICcuL2dyZWV0JztcblxuXG5cbiQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uICgpIHtcbiAgJCgnYm9keScpLnByZXBlbmQoJzxoMT4nICsgZ3JlZXQoJ2ppbGwnKSArICc8L2gxPicpO1xuIH0pXG5jb25zb2xlLmxvZygnY2EgbWFyY2hlIGpzIG9rID8nKTtcblxuXG5cblxuXG5cblxuXG4iLCJpbXBvcnQgeyBDb250cm9sbGVyIH0gZnJvbSAnQGhvdHdpcmVkL3N0aW11bHVzJztcblxuLypcbiAqIFRoaXMgaXMgYW4gZXhhbXBsZSBTdGltdWx1cyBjb250cm9sbGVyIVxuICpcbiAqIEFueSBlbGVtZW50IHdpdGggYSBkYXRhLWNvbnRyb2xsZXI9XCJoZWxsb1wiIGF0dHJpYnV0ZSB3aWxsIGNhdXNlXG4gKiB0aGlzIGNvbnRyb2xsZXIgdG8gYmUgZXhlY3V0ZWQuIFRoZSBuYW1lIFwiaGVsbG9cIiBjb21lcyBmcm9tIHRoZSBmaWxlbmFtZTpcbiAqIGhlbGxvX2NvbnRyb2xsZXIuanMgLT4gXCJoZWxsb1wiXG4gKlxuICogRGVsZXRlIHRoaXMgZmlsZSBvciBhZGFwdCBpdCBmb3IgeW91ciB1c2UhXG4gKi9cbmV4cG9ydCBkZWZhdWx0IGNsYXNzIGV4dGVuZHMgQ29udHJvbGxlciB7XG4gICAgY29ubmVjdCgpIHtcbiAgICAgICAgdGhpcy5lbGVtZW50LnRleHRDb250ZW50ID0gJ0hlbGxvIFN0aW11bHVzISBFZGl0IG1lIGluIGFzc2V0cy9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyLmpzJztcbiAgICB9XG59XG4iLCJcclxuZXhwb3J0IGRlZmF1bHQgZnVuY3Rpb24gKG5hbWUpIHtcclxuICAgIHJldHVybiBgWW8geW8gJHtuYW1lfSAtIHdlbGNvbWUgdG8gRW5jb3JlIWA7XHJcbn07XHJcblxyXG5cclxuIiwiLy8gVGhpcyBpcyBmb3IgYWJsZSB0byBzZWUgY2hhcnQuIFdlIGFyZSB1c2luZyBBcGV4IENoYXJ0LiBVIGNhbiBjaGVjayB0aGUgZG9jdW1lbnRhdGlvbiBvZiBBcGV4IENoYXJ0cyB0b28uLlxyXG4vLyBhc3NldHMvYXBwLmpzXHJcbi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogV2UgcmVjb21tZW5kIGluY2x1ZGluZyB0aGUgYnVpbHQgdmVyc2lvbiBvZiB0aGlzIEphdmFTY3JpcHQgZmlsZVxyXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxyXG4gKi9cclxuXHJcbnZhciBvcHRpb25zID0ge1xyXG4gICAgc2VyaWVzOiBbXHJcbiAgICAgIHtcclxuICAgICAgICBuYW1lOiBcIk5ldCBQcm9maXRcIixcclxuICAgICAgICBkYXRhOiBbNDQsIDU1LCA1NywgNTYsIDYxLCA1OCwgNjMsIDYwLCA2Nl0sXHJcbiAgICAgIH0sXHJcbiAgICAgIHtcclxuICAgICAgICBuYW1lOiBcIlJldmVudWVcIixcclxuICAgICAgICBkYXRhOiBbNzYsIDg1LCAxMDEsIDk4LCA4NywgMTA1LCA5MSwgMTE0LCA5NF0sXHJcbiAgICAgIH0sXHJcbiAgICAgIHtcclxuICAgICAgICBuYW1lOiBcIkZyZWUgQ2FzaCBGbG93XCIsXHJcbiAgICAgICAgZGF0YTogWzM1LCA0MSwgMzYsIDI2LCA0NSwgNDgsIDUyLCA1MywgNDFdLFxyXG4gICAgICB9LFxyXG4gICAgXSxcclxuICAgIGNoYXJ0OiB7XHJcbiAgICAgIHR5cGU6IFwiYmFyXCIsXHJcbiAgICAgIGhlaWdodDogMjUwLCAvLyBtYWtlIHRoaXMgMjUwXHJcbiAgICAgIHNwYXJrbGluZToge1xyXG4gICAgICAgIGVuYWJsZWQ6IHRydWUsIC8vIG1ha2UgdGhpcyB0cnVlXHJcbiAgICAgIH0sXHJcbiAgICB9LFxyXG4gICAgcGxvdE9wdGlvbnM6IHtcclxuICAgICAgYmFyOiB7XHJcbiAgICAgICAgaG9yaXpvbnRhbDogZmFsc2UsXHJcbiAgICAgICAgY29sdW1uV2lkdGg6IFwiNTUlXCIsXHJcbiAgICAgICAgZW5kaW5nU2hhcGU6IFwicm91bmRlZFwiLFxyXG4gICAgICB9LFxyXG4gICAgfSxcclxuICAgIGRhdGFMYWJlbHM6IHtcclxuICAgICAgZW5hYmxlZDogZmFsc2UsXHJcbiAgICB9LFxyXG4gICAgc3Ryb2tlOiB7XHJcbiAgICAgIHNob3c6IHRydWUsXHJcbiAgICAgIHdpZHRoOiAyLFxyXG4gICAgICBjb2xvcnM6IFtcInRyYW5zcGFyZW50XCJdLFxyXG4gICAgfSxcclxuICAgIFxyXG4gICAgeWF4aXM6IHtcclxuICAgICAgdGl0bGU6IHtcclxuICAgICAgICB0ZXh0OiBcIiQgKHRob3VzYW5kcylcIixcclxuICAgICAgfSxcclxuICAgIH0sXHJcbiAgICBmaWxsOiB7XHJcbiAgICAgIG9wYWNpdHk6IDEsXHJcbiAgICB9LFxyXG4gICAgdG9vbHRpcDoge1xyXG4gICAgICB5OiB7XHJcbiAgICAgICAgZm9ybWF0dGVyOiBmdW5jdGlvbiAodmFsKSB7XHJcbiAgICAgICAgICByZXR1cm4gXCIkIFwiICsgdmFsICsgXCIgdGhvdXNhbmRzXCI7XHJcbiAgICAgICAgfSxcclxuICAgICAgfSxcclxuICAgIH0sXHJcbiAgfTtcclxuICBcclxuICB2YXIgY2hhcnQgPSBuZXcgQXBleENoYXJ0cyhkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI2FwZXgxXCIpLCBvcHRpb25zKTtcclxuICBjaGFydC5yZW5kZXIoKTtcclxuICBcclxuICAvLyBTaWRlYmFyIFRvZ2dsZSBDb2RlcztcclxuICBcclxuICB2YXIgc2lkZWJhck9wZW4gPSBmYWxzZTtcclxuICB2YXIgc2lkZWJhciA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwic2lkZWJhclwiKTtcclxuICB2YXIgc2lkZWJhckNsb3NlSWNvbiA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKFwic2lkZWJhckljb25cIik7XHJcbiAgXHJcbiAgZnVuY3Rpb24gdG9nZ2xlU2lkZWJhcigpIHtcclxuICAgIGlmICghc2lkZWJhck9wZW4pIHtcclxuICAgICAgc2lkZWJhci5jbGFzc0xpc3QuYWRkKFwic2lkZWJhcl9yZXNwb25zaXZlXCIpO1xyXG4gICAgICBzaWRlYmFyT3BlbiA9IHRydWU7XHJcbiAgICB9XHJcbiAgfVxyXG4gIFxyXG4gIGZ1bmN0aW9uIGNsb3NlU2lkZWJhcigpIHtcclxuICAgIGlmIChzaWRlYmFyT3Blbikge1xyXG4gICAgICBzaWRlYmFyLmNsYXNzTGlzdC5yZW1vdmUoXCJzaWRlYmFyX3Jlc3BvbnNpdmVcIik7XHJcbiAgICAgIHNpZGViYXJPcGVuID0gZmFsc2U7XHJcbiAgICB9XHJcbiAgfVxyXG4gIFxyXG4gIC8vbGV0IGJ1dHRvbkNoZWNrID0gMTtcclxuICAvL2J1dHRvbkNoZWNrID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2J1dHRvbkNoZWNrJyk7XHJcbiAgLy9idXR0b25DaGVjay5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGV2ZW50ID0+XHJcbiAgLy8gIGJ1dHRvbkNoZWNrID0gMFxyXG4gIC8vKVxyXG4gIC8vXHJcbiAgXHJcbiAgLy9jb25zb2xlLmxvZyQoJ2V2ZW50Jyk7XHJcbiAgXHJcbiAgJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuICAgIGNvbnNvbGUubG9nKFwianF1ZXJ5IG9rID9cIilcclxuICAgIFxyXG4gIH0pO1xyXG4gIFxyXG4gIGNvbnNvbGUubG9nKCdjYSBtYXJjaGUganMgPycpO1xyXG4gIFxyXG4gIC8vZGVjYWxhcmF0aW9uIGRlIHZhcmlhYmxlIHBvdXIgbCdhY3Rpdml0w6kgZGVzIHBlcm1pc3Npb25zIGV0IGRlcyBib3V0b25zIHBvdXIgZXZlbnRcclxuICBcclxuICBcclxuICAvL3NlbGVjdGlvbiBkZSBsJ2FjdGl2aXRlIGRhbnMgbGEgYmFzZSBkZSBkb25uw6llcyBkZSBsJ2FjdGl2aXTDqSBkZXMgcGVybWlzc2lvbnNcclxuICAvL3NpIGxhIHZhbGV1ciBkZSBsJ2FjdGl2aXTDqSBkZXMgcGVybWlzc2lvbnMgZXN0IDAgKGJvb2wpIGV0IHNpIG9uIGNsaXF1ZSBzdXIgdmFsaWRlciBsZSBmb3JtdWxhaXJlXHJcbiAgLy9hbG9ycyBsYSB2YWxldXIgcGFzc2UgYSAxIGRhbnMgbGEgYmFzZSBkZSBkb25uw6llcyBldCBkYW5zIGwnYWZmaWNoYWdlXHJcbiAgLy9zaW5vbiBlbGxlIHJlc3RlIMOgIDAgYWxvcnMgYm91Y2hvbiBncmlzIGRlc2FjdGl2w6kiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiLCIvLyBleHRyYWN0ZWQgYnkgbWluaS1jc3MtZXh0cmFjdC1wbHVnaW5cbmV4cG9ydCB7fTsiXSwibmFtZXMiOlsiJCIsImdyZWV0IiwiZG9jdW1lbnQiLCJyZWFkeSIsInByZXBlbmQiLCJjb25zb2xlIiwibG9nIiwiQ29udHJvbGxlciIsImVsZW1lbnQiLCJ0ZXh0Q29udGVudCIsIm5hbWUiLCJvcHRpb25zIiwic2VyaWVzIiwiZGF0YSIsImNoYXJ0IiwidHlwZSIsImhlaWdodCIsInNwYXJrbGluZSIsImVuYWJsZWQiLCJwbG90T3B0aW9ucyIsImJhciIsImhvcml6b250YWwiLCJjb2x1bW5XaWR0aCIsImVuZGluZ1NoYXBlIiwiZGF0YUxhYmVscyIsInN0cm9rZSIsInNob3ciLCJ3aWR0aCIsImNvbG9ycyIsInlheGlzIiwidGl0bGUiLCJ0ZXh0IiwiZmlsbCIsIm9wYWNpdHkiLCJ0b29sdGlwIiwieSIsImZvcm1hdHRlciIsInZhbCIsIkFwZXhDaGFydHMiLCJxdWVyeVNlbGVjdG9yIiwicmVuZGVyIiwic2lkZWJhck9wZW4iLCJzaWRlYmFyIiwiZ2V0RWxlbWVudEJ5SWQiLCJzaWRlYmFyQ2xvc2VJY29uIiwidG9nZ2xlU2lkZWJhciIsImNsYXNzTGlzdCIsImFkZCIsImNsb3NlU2lkZWJhciIsInJlbW92ZSJdLCJzb3VyY2VSb290IjoiIn0=