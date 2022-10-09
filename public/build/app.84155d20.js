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





jquery__WEBPACK_IMPORTED_MODULE_3___default()(document).ready(function () {
  jquery__WEBPACK_IMPORTED_MODULE_3___default()('body').prepend('<h1>' + greet('jill') + '</h1>');
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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Q0EsSUFBSUMsZ0JBQWdCLEdBQUczQyxRQUFRLENBQUMwQyxjQUFULENBQXdCLGFBQXhCLENBQXZCOztBQUVBLFNBQVNFLGFBQVQsR0FBeUI7RUFDdkIsSUFBSSxDQUFDSixXQUFMLEVBQWtCO0lBQ2hCQyxPQUFPLENBQUNJLFNBQVIsQ0FBa0JDLEdBQWxCLENBQXNCLG9CQUF0QjtJQUNBTixXQUFXLEdBQUcsSUFBZDtFQUNEO0FBQ0Y7O0FBRUQsU0FBU08sWUFBVCxHQUF3QjtFQUN0QixJQUFJUCxXQUFKLEVBQWlCO0lBQ2ZDLE9BQU8sQ0FBQ0ksU0FBUixDQUFrQkcsTUFBbEIsQ0FBeUIsb0JBQXpCO0lBQ0FSLFdBQVcsR0FBRyxLQUFkO0VBQ0Q7QUFDRixFQUVEO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUVBOzs7QUFFQXpDLENBQUMsQ0FBQ0MsUUFBRCxDQUFELENBQVlDLEtBQVosQ0FBa0IsWUFBVTtFQUMxQkcsT0FBTyxDQUFDQyxHQUFSLENBQVksYUFBWjtBQUVELENBSEQ7QUFLQUQsT0FBTyxDQUFDQyxHQUFSLENBQVksZ0JBQVosR0FFQTtBQUdBO0FBQ0E7QUFDQTtBQUNBOzs7Ozs7Ozs7Ozs7QUM3R0Y7Ozs7Ozs7Ozs7Ozs7QUNBQSIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2pzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5jc3MiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hdXRyZS5jc3MiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL3N0eWxlcy9hcHAuY3NzJztcbmltcG9ydCAnLi9zdHlsZXMvYXV0cmUuY3NzJztcbmltcG9ydCAnLi9qcy9hcHAuanMnO1xuaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcbmltcG9ydCAnLi9jb250cm9sbGVycy9oZWxsb19jb250cm9sbGVyJztcblxuXG5cblxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24gKCkge1xuICAkKCdib2R5JykucHJlcGVuZCgnPGgxPicgKyBncmVldCgnamlsbCcpICsgJzwvaDE+Jyk7XG4gfSlcbmNvbnNvbGUubG9nKCdjYSBtYXJjaGUganMgb2sgPycpO1xuXG5cblxuXG5cblxuXG5cbiIsImltcG9ydCB7IENvbnRyb2xsZXIgfSBmcm9tICdAaG90d2lyZWQvc3RpbXVsdXMnO1xuXG4vKlxuICogVGhpcyBpcyBhbiBleGFtcGxlIFN0aW11bHVzIGNvbnRyb2xsZXIhXG4gKlxuICogQW55IGVsZW1lbnQgd2l0aCBhIGRhdGEtY29udHJvbGxlcj1cImhlbGxvXCIgYXR0cmlidXRlIHdpbGwgY2F1c2VcbiAqIHRoaXMgY29udHJvbGxlciB0byBiZSBleGVjdXRlZC4gVGhlIG5hbWUgXCJoZWxsb1wiIGNvbWVzIGZyb20gdGhlIGZpbGVuYW1lOlxuICogaGVsbG9fY29udHJvbGxlci5qcyAtPiBcImhlbGxvXCJcbiAqXG4gKiBEZWxldGUgdGhpcyBmaWxlIG9yIGFkYXB0IGl0IGZvciB5b3VyIHVzZSFcbiAqL1xuZXhwb3J0IGRlZmF1bHQgY2xhc3MgZXh0ZW5kcyBDb250cm9sbGVyIHtcbiAgICBjb25uZWN0KCkge1xuICAgICAgICB0aGlzLmVsZW1lbnQudGV4dENvbnRlbnQgPSAnSGVsbG8gU3RpbXVsdXMhIEVkaXQgbWUgaW4gYXNzZXRzL2NvbnRyb2xsZXJzL2hlbGxvX2NvbnRyb2xsZXIuanMnO1xuICAgIH1cbn1cbiIsIi8vIFRoaXMgaXMgZm9yIGFibGUgdG8gc2VlIGNoYXJ0LiBXZSBhcmUgdXNpbmcgQXBleCBDaGFydC4gVSBjYW4gY2hlY2sgdGhlIGRvY3VtZW50YXRpb24gb2YgQXBleCBDaGFydHMgdG9vLi5cclxuLy8gYXNzZXRzL2FwcC5qc1xyXG4vKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFdlIHJlY29tbWVuZCBpbmNsdWRpbmcgdGhlIGJ1aWx0IHZlcnNpb24gb2YgdGhpcyBKYXZhU2NyaXB0IGZpbGVcclxuICogKGFuZCBpdHMgQ1NTIGZpbGUpIGluIHlvdXIgYmFzZSBsYXlvdXQgKGJhc2UuaHRtbC50d2lnKS5cclxuICovXHJcblxyXG52YXIgb3B0aW9ucyA9IHtcclxuICAgIHNlcmllczogW1xyXG4gICAgICB7XHJcbiAgICAgICAgbmFtZTogXCJOZXQgUHJvZml0XCIsXHJcbiAgICAgICAgZGF0YTogWzQ0LCA1NSwgNTcsIDU2LCA2MSwgNTgsIDYzLCA2MCwgNjZdLFxyXG4gICAgICB9LFxyXG4gICAgICB7XHJcbiAgICAgICAgbmFtZTogXCJSZXZlbnVlXCIsXHJcbiAgICAgICAgZGF0YTogWzc2LCA4NSwgMTAxLCA5OCwgODcsIDEwNSwgOTEsIDExNCwgOTRdLFxyXG4gICAgICB9LFxyXG4gICAgICB7XHJcbiAgICAgICAgbmFtZTogXCJGcmVlIENhc2ggRmxvd1wiLFxyXG4gICAgICAgIGRhdGE6IFszNSwgNDEsIDM2LCAyNiwgNDUsIDQ4LCA1MiwgNTMsIDQxXSxcclxuICAgICAgfSxcclxuICAgIF0sXHJcbiAgICBjaGFydDoge1xyXG4gICAgICB0eXBlOiBcImJhclwiLFxyXG4gICAgICBoZWlnaHQ6IDI1MCwgLy8gbWFrZSB0aGlzIDI1MFxyXG4gICAgICBzcGFya2xpbmU6IHtcclxuICAgICAgICBlbmFibGVkOiB0cnVlLCAvLyBtYWtlIHRoaXMgdHJ1ZVxyXG4gICAgICB9LFxyXG4gICAgfSxcclxuICAgIHBsb3RPcHRpb25zOiB7XHJcbiAgICAgIGJhcjoge1xyXG4gICAgICAgIGhvcml6b250YWw6IGZhbHNlLFxyXG4gICAgICAgIGNvbHVtbldpZHRoOiBcIjU1JVwiLFxyXG4gICAgICAgIGVuZGluZ1NoYXBlOiBcInJvdW5kZWRcIixcclxuICAgICAgfSxcclxuICAgIH0sXHJcbiAgICBkYXRhTGFiZWxzOiB7XHJcbiAgICAgIGVuYWJsZWQ6IGZhbHNlLFxyXG4gICAgfSxcclxuICAgIHN0cm9rZToge1xyXG4gICAgICBzaG93OiB0cnVlLFxyXG4gICAgICB3aWR0aDogMixcclxuICAgICAgY29sb3JzOiBbXCJ0cmFuc3BhcmVudFwiXSxcclxuICAgIH0sXHJcbiAgICBcclxuICAgIHlheGlzOiB7XHJcbiAgICAgIHRpdGxlOiB7XHJcbiAgICAgICAgdGV4dDogXCIkICh0aG91c2FuZHMpXCIsXHJcbiAgICAgIH0sXHJcbiAgICB9LFxyXG4gICAgZmlsbDoge1xyXG4gICAgICBvcGFjaXR5OiAxLFxyXG4gICAgfSxcclxuICAgIHRvb2x0aXA6IHtcclxuICAgICAgeToge1xyXG4gICAgICAgIGZvcm1hdHRlcjogZnVuY3Rpb24gKHZhbCkge1xyXG4gICAgICAgICAgcmV0dXJuIFwiJCBcIiArIHZhbCArIFwiIHRob3VzYW5kc1wiO1xyXG4gICAgICAgIH0sXHJcbiAgICAgIH0sXHJcbiAgICB9LFxyXG4gIH07XHJcbiAgXHJcbiAgdmFyIGNoYXJ0ID0gbmV3IEFwZXhDaGFydHMoZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIiNhcGV4MVwiKSwgb3B0aW9ucyk7XHJcbiAgY2hhcnQucmVuZGVyKCk7XHJcbiAgXHJcbiAgLy8gU2lkZWJhciBUb2dnbGUgQ29kZXM7XHJcbiAgXHJcbiAgdmFyIHNpZGViYXJPcGVuID0gZmFsc2U7XHJcbiAgdmFyIHNpZGViYXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNpZGViYXJcIik7XHJcbiAgdmFyIHNpZGViYXJDbG9zZUljb24gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZChcInNpZGViYXJJY29uXCIpO1xyXG4gIFxyXG4gIGZ1bmN0aW9uIHRvZ2dsZVNpZGViYXIoKSB7XHJcbiAgICBpZiAoIXNpZGViYXJPcGVuKSB7XHJcbiAgICAgIHNpZGViYXIuY2xhc3NMaXN0LmFkZChcInNpZGViYXJfcmVzcG9uc2l2ZVwiKTtcclxuICAgICAgc2lkZWJhck9wZW4gPSB0cnVlO1xyXG4gICAgfVxyXG4gIH1cclxuICBcclxuICBmdW5jdGlvbiBjbG9zZVNpZGViYXIoKSB7XHJcbiAgICBpZiAoc2lkZWJhck9wZW4pIHtcclxuICAgICAgc2lkZWJhci5jbGFzc0xpc3QucmVtb3ZlKFwic2lkZWJhcl9yZXNwb25zaXZlXCIpO1xyXG4gICAgICBzaWRlYmFyT3BlbiA9IGZhbHNlO1xyXG4gICAgfVxyXG4gIH1cclxuICBcclxuICAvL2xldCBidXR0b25DaGVjayA9IDE7XHJcbiAgLy9idXR0b25DaGVjayA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdidXR0b25DaGVjaycpO1xyXG4gIC8vYnV0dG9uQ2hlY2suYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBldmVudCA9PlxyXG4gIC8vICBidXR0b25DaGVjayA9IDBcclxuICAvLylcclxuICAvL1xyXG4gIFxyXG4gIC8vY29uc29sZS5sb2ckKCdldmVudCcpO1xyXG4gIFxyXG4gICQoZG9jdW1lbnQpLnJlYWR5KGZ1bmN0aW9uKCl7XHJcbiAgICBjb25zb2xlLmxvZyhcImpxdWVyeSBvayA/XCIpXHJcbiAgICBcclxuICB9KTtcclxuICBcclxuICBjb25zb2xlLmxvZygnY2EgbWFyY2hlIGpzID8nKTtcclxuICBcclxuICAvL2RlY2FsYXJhdGlvbiBkZSB2YXJpYWJsZSBwb3VyIGwnYWN0aXZpdMOpIGRlcyBwZXJtaXNzaW9ucyBldCBkZXMgYm91dG9ucyBwb3VyIGV2ZW50XHJcbiAgXHJcbiAgXHJcbiAgLy9zZWxlY3Rpb24gZGUgbCdhY3Rpdml0ZSBkYW5zIGxhIGJhc2UgZGUgZG9ubsOpZXMgZGUgbCdhY3Rpdml0w6kgZGVzIHBlcm1pc3Npb25zXHJcbiAgLy9zaSBsYSB2YWxldXIgZGUgbCdhY3Rpdml0w6kgZGVzIHBlcm1pc3Npb25zIGVzdCAwIChib29sKSBldCBzaSBvbiBjbGlxdWUgc3VyIHZhbGlkZXIgbGUgZm9ybXVsYWlyZVxyXG4gIC8vYWxvcnMgbGEgdmFsZXVyIHBhc3NlIGEgMSBkYW5zIGxhIGJhc2UgZGUgZG9ubsOpZXMgZXQgZGFucyBsJ2FmZmljaGFnZVxyXG4gIC8vc2lub24gZWxsZSByZXN0ZSDDoCAwIGFsb3JzIGJvdWNob24gZ3JpcyBkZXNhY3RpdsOpIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIiQiLCJkb2N1bWVudCIsInJlYWR5IiwicHJlcGVuZCIsImdyZWV0IiwiY29uc29sZSIsImxvZyIsIkNvbnRyb2xsZXIiLCJlbGVtZW50IiwidGV4dENvbnRlbnQiLCJvcHRpb25zIiwic2VyaWVzIiwibmFtZSIsImRhdGEiLCJjaGFydCIsInR5cGUiLCJoZWlnaHQiLCJzcGFya2xpbmUiLCJlbmFibGVkIiwicGxvdE9wdGlvbnMiLCJiYXIiLCJob3Jpem9udGFsIiwiY29sdW1uV2lkdGgiLCJlbmRpbmdTaGFwZSIsImRhdGFMYWJlbHMiLCJzdHJva2UiLCJzaG93Iiwid2lkdGgiLCJjb2xvcnMiLCJ5YXhpcyIsInRpdGxlIiwidGV4dCIsImZpbGwiLCJvcGFjaXR5IiwidG9vbHRpcCIsInkiLCJmb3JtYXR0ZXIiLCJ2YWwiLCJBcGV4Q2hhcnRzIiwicXVlcnlTZWxlY3RvciIsInJlbmRlciIsInNpZGViYXJPcGVuIiwic2lkZWJhciIsImdldEVsZW1lbnRCeUlkIiwic2lkZWJhckNsb3NlSWNvbiIsInRvZ2dsZVNpZGViYXIiLCJjbGFzc0xpc3QiLCJhZGQiLCJjbG9zZVNpZGViYXIiLCJyZW1vdmUiXSwic291cmNlUm9vdCI6IiJ9