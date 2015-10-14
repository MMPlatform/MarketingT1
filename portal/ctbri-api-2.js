//API
var API = function() {

	return {

		head : function() {
			var head = {
					"Api-Version" : "1.0",
					"Client-OS" : "3",
					"Client-Type" : "3",
					"Nonce" : Math.floor(10000000 + Math.random()*(89999999)),
					"Sign-Method" : "HMAC-SHA1",
					"TimeStamp" : new Date().getTime(),
			};
			return head;
		},
		sign : function(source) {
			return CryptoJS.HmacSHA1(source,"h2Yrr0tVrgPSw1AI8hwjpoh6KqSRfxWK&");
		},
		signIn : function(e) {
			try {
				var h = API.head();
				var data = "ap_address=" + $.url().param('gw_address')
							+ "&ap_mac=" + $.url().param('gw_id').replace(/:/gm,'') 
							+ "&client_mac=" + $.url().param('mac').replace(/:/gm,'')
							+ "&gw_port=" + $.url().param('gw_port')
							+ "&user_ip=" + $.url().param('public_ip')
							+ '&z=' + new Date().getTime();
				var source = $.param(h) + "&" +  data;
				h.Sign = CryptoJS.enc.Base64.stringify(API.sign(encodeURIComponent(source)));
				$.ajax({
					type : 'GET',
					url : 'http://42.123.76.46/ctbri-api/ap/ctbri/sign_in_free.json',
					data : data,
					headers : h,
					success : function(response) {
						if(response.ret == '0'){
							var auth_url = response.data.auth_url;
							location.href = auth_url;
						}else{
							alert(response.desp);
							location.href = "http://www.baidu.com";
						}
					},
					error : function(response) {
						alert("请求错误，请稍后再试。");
						location.href = "http://www.baidu.com";
					}
				});
			} catch (ex) {
				alert("浏览器发生错误，请重启浏览器。");
				location.href = "http://www.baidu.com";
			}
		}
	};

}();