'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var App = function (_React$Component) {
  _inherits(App, _React$Component);

  function App(props) {
    _classCallCheck(this, App);

    var _this = _possibleConstructorReturn(this, (App.__proto__ || Object.getPrototypeOf(App)).call(this, props));

    _this.requestMemberTree = _this.requestMemberTree.bind(_this);
    _this.textInput = React.createRef();
    _this.state = {
      activeItem: 0,
      member: 21079,//21079
    };
    //21926
    axios.defaults.headers.common['Authorization'] = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdiZmJkMTU4MWZmMDQwMGU1M2JlM2RiNjlkODUzODAzNTcwNjlhOWI4MmU4ZGZhMzNhM2MwOWU2MjJiMmEwMGVhMDc0MzhmZmJlN2E5Mzc3In0.eyJhdWQiOiIzIiwianRpIjoiN2JmYmQxNTgxZmYwNDAwZTUzYmUzZGI2OWQ4NTM4MDM1NzA2OWE5YjgyZThkZmEzM2EzYzA5ZTYyMmIyYTAwZWEwNzQzOGZmYmU3YTkzNzciLCJpYXQiOjE1NTE4NzUxMDAsIm5iZiI6MTU1MTg3NTEwMCwiZXhwIjoxNTgzNDk3NTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbImFkbWluIl19.UKE1Ea2W-8x-yV_urFOWcwISyO3Uap3GedO31WOnhpa2x6TBppy5wjD6O3uZq7__YETDnAf-pSJnmP8yQ0ZvcKdGxV5LhGs5knzey6-W-ULRBKjHtSl7ujJG9dxVnGwW-nWEeh3msRYnjJtORXslCN9vtsaRtDz_7M7lP48_pJc1BEtwv7ciUXE-wuBDwVAczCzkFoiJIE_2Kp30py2AHWBN6d8DJyI4PHF3kz8vbU4zjV50UG2kK6Nq1gMQkgh05OCZuogQx9axTTfn50kf8omaQw46NzO674WbHMHPGor87pJY2GnN0ENzgF769bE4XV0yJVEAd2QkQnieF94sbZvl1foN9AjtAM5ro-IzkbfhdDhthJNSZ35004bMlq0_Rbx_mmS5HhEeC_Duwm0CzHo7Z6-Q6MnnWOUL5X5UZdEN8MKxh4Vv7pkR1rmLzQjkcxzNFVMBLFHyqJQxTQnCRfwHJWCoU7FhR0xT6xYRut9nfjroW7rxiY86pU9aM8KGP8asOA_sPX75ptvLa1vh68GNnAJFd2ApF07ciARicJUlAKvw1kNrIqMDcEff4mACYd6pIGarVX967J_9sBvotsbEwZTv0QrR9FACtLcvGrvUNoHArDJcZAwEJ_N25hBwjCRl2XDtt8MNFGdpMOdP8uVkI2kjpXo0Q0NOT9drH48';
    return _this;
  }

  _createClass(App, [{
    key: 'requestMemberTree',
    value: function requestMemberTree(index, val) {
      this.setState({
        activeItem: index,
        member: val
      });
    }
  }, {
    key: 'render',
    value: function render() {
      var _this2 = this;

      var _state = this.state,
        members = _state.members,
        activeItem = _state.activeItem;

      return React.createElement(
        'div',
        { className: '' },
        React.createElement(
            'div',
            { className: 'tree-grid' },
            React.createElement(Tree, { nodeClick:3, routeLink:'https://api.dev.famtreedemo.com/api/admin/family-requests/tree/', memberItem: this.state.member })
          )
      );
    }
  }]);

  return App;
}(React.Component);

ReactDOM.render(React.createElement(App, null), document.getElementById('root'));
