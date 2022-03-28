function getQueryParam(name) {
    name = name.replace(/[\[]/, '\[').replace(/[\]]/, '\]');
    var regex = new RegExp('[\?&]' + name + '=([^&#]*)');
    var results = regex.exec(location.search);
    return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
  };
  function getCookieValue(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  function getOneIdInfo(oneIdInfoCookie) {
    const splits = oneIdInfoCookie.split('|');
    const oneIdInfo = {};
    oneIdInfo.userId = splits[4];
    oneIdInfo.products = splits[7] === '' ? [] : splits[7].split(',');
    return oneIdInfo;
  }
  function getSubscriptionId(oneIdInfo) {
    return oneIdInfo.userId;
  }
  function getSubscriptionType(oneIdInfo) {
    return oneIdInfo.products && oneIdInfo.products.length > 0 ? 'Subscriber' : 'Free';
  }
  // adobeDataLayer for adobe analytics
  function finalizeAdobeDataLayer() {
    var adobeDataLayer = undefined || {};
    adobeDataLayer.adobe_mc = getQueryParam('adobe_mc');
    var oneIdInfoCookie = getCookieValue('oneid_info');
    if (oneIdInfoCookie && oneIdInfoCookie.length > 0) {
      var oneIdInfo = getOneIdInfo(atob(oneIdInfoCookie));
      adobeDataLayer.subscription = {
        userId: getSubscriptionId(oneIdInfo),
        type: getSubscriptionType(oneIdInfo)
      }
    } else {
      adobeDataLayer.subscription = {
        userId: '',
        type: 'Guest'
      }
    }
    return adobeDataLayer;
  }
  window.globalDataLayer = finalizeAdobeDataLayer();