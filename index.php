<html>
<head>
	<title>Store</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="static/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="static/css/public.css" />
	<link rel="stylesheet" type="text/css" href="static/css/swiper.min.css">
	<link rel="stylesheet" type="text/css" href="static/css/elementui.css"/>
	<link rel="shortcut icon" href="favicon.ico">
	<script src="static/js/jquery-3.1.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="static/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="static/js/vue.js"></script>
	<script src="static/js/elementui.js" type="text/javascript" charset="utf-8"></script>
</head>

<body style="min-width: 1200px; overflow-x: auto;background: #f5f5f5;">
<div class="toTop" onClick="window.scrollTo(0,0);"><i class="el-icon-upload2"></i></div>
<div id="cdnvue">
	<div id="" class="top_gg">
		<a href="">
			<!-- <img src="static/image/top_gg.jpg" /> -->
		</a>
	</div>
	<div id="" class="shortcut">
		<div class="layout">
			<div class="s-sub">
				<ul>
					<li>
						<a href="javascript:void(0)">首頁</a>
					</li>
					<li>
						<a href="systemInfo.html">商城簡介</a>
					</li>
					<!-- <li>
                       <a href="">幫助中心 用戶回饋</a>
                    </li> -->
					<li>
						<a href="baoxiu.html">保修政策</a>
					</li>
					<li>
						<a href="problem.html">熱門問題</a>
					</li>
				</ul>
			</div>
			<div class="s-right">
				<ul>
					<li>
						<a href="javascript:void(0)" v-if="!userInfo.userName" @click="dialogFormVisible = true">請登入/註冊</a>
						<a href="userInfo.html" v-else>{{userInfo.userName}}</a>
					</li>
					<!-- <li v-if="userInfo.userName">
                       <a href="javascript:void(0)">積分：{{userInfo.jifen}}</a>
                    </li> -->
					<li>
						<a href="javascript:void(0)" @click="car">|&emsp;購物車</a>
					</li>
					<li>
						<a href="javascript:void(0)" @click="order">|&emsp;訂單</a>
					</li>
					<li>
						<a href="javascript:void(0)" @click="loginOut">|&emsp;退出</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--header-->
	<div class="header">
		<div id="" class="layout">
			<div class="left">
				<div class="logo">
					<img src="static/image/logo.png" />
				</div>
				<div class="naver">
					<ul id="naver-list">
						<li id="huawei" class="">
							<a href="ry.html" target="_blank">
								<span>榮耀</span>
							</a>
						</li>
						<li id="huawei" class="">
							<a href="p.html" target="_blank">
								<span>HUAWEI P系列</span>
							</a>
						</li>
						<li id="honor" class="">
							<a href="rycw.html" target="_blank">
								<span>華為暢享系列</span>
							</a>
						</li>
						<li id="honor" class="">
							<a href="mate.html" target="_blank">
								<span>HUAWEI Mate系列</span>
							</a>
						</li>
						<li id="honor" class="">
							<a href="nova.html" target="_blank">
								<span>HUAWEI nova系列</span>
							</a>
						</li>
						<!-- <li id="huawei" class="">
                           <a href="nova_4.html" target="_blank">
                              <span>華為暢享系列</span>
                           </a>
                        </li> -->
					</ul>
				</div>
			</div>
			<!--導航右邊部分-->
			<div class="right">
				<input type="text" v-model="searchVal" placeholder="榮耀10降價" class="search-text">
				<el-button class="search-btn" icon="el-icon-search" @click="onsearchVal" circle></el-button>
				<!-- <input type="submit" class="search-btn" @click="onsearchVal" value="搜索"> -->
			</div>
		</div>
	</div>

	<!--輪播圖-->
	<div id="banner">
		<div class="swiper-container">
			<div class="swiper-wrapper" id="box">
				<div class="swiper-slide"><img src=""  /></div>
				<div class="swiper-slide"><img src=""  /></div>
				<div class="swiper-slide"><img src="" /></div>
			</div>
			<!-- 如果需要導航按鈕 -->
			<div class="swiper-button-prev swiper-button-white"></div>
			<div class="swiper-button-next swiper-button-white"></div>
			<div class="swiper-pagination"></div>
		</div>
	</div>
	<div class="box">
		<span>公告：</span>
		<div class="winBox">
			<ul class="scroll">

				<li v-for="(item,index) in jsonggData" @click="toggDetail(item.g_title)">
					<a href="#">&emsp;{{item.g_title}}</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="show_list">
		<!--            <div class="show_lists">-->
		<!--               <a href="detail.html?id=f02b6799-1e3b-2f86-f"><img src="static/image/8x.png" /></a>-->
		<!--            </div>-->
		<!--            <div class="show_lists">-->
		<!--                  <a href="detail.html?id=abc081d8-060c-5d3a-6"><img src="static/image/p20.jpg" /></a>-->
		<!--            </div>-->
		<!--            <div class="show_lists">-->
		<!--                  <a href="detail.html?id=4fb439ab-bb4e-d818-d"><img src="static/image/nova3.png" /></a>-->
		<!--            </div>-->
		<!--            <div class="show_lists">-->
		<!--                  <a href="detail.html?id=219129f3-6419-a3bf-e"><img src="static/image/note10.png" /></a>-->
		<!--            </div>-->
	</div>
	<!--全部產品-->
	<!--<img :src=`static/image/${item.img}` />-->
	<!-- <a :href="`gonggao.html?t=${item.g_title}`" target="_blank"> -->
	<!-- </a> -->
	<!-- <div id="hotPro" class="layout">
       <div class="layout">
             <h2 class="title" style="float:left">全部產品</h2>
             <div class="orderBy">
                   <span @click="orderBy('price')">價格從低到高</span>&emsp;|&emsp;<span @click="orderBy('sales')">銷量從低到高</span>&emsp;|
                   <span @click="orderBy2('price')">價格從高到低</span>&emsp;|&emsp;<span @click="orderBy2('sales')">銷量從高到低</span>
             </div>
             <div class="hotPro-right">
                <span>公告：</span>
                <div class="notice">
                   <ul>
                   <li v-for="(item,index) in jsonggData" @click="toggDetail(item.g_title)" style="cursor:pointer">
                            {{item.g_title}}
                   </li>
                   </ul>
                   </div>
             </div>
       </div>
       <div class="layout">
          <ul class="grid_ul">
             <li class="grid-items" v-for="(item,index) in jsonData">
                <a :href="`detail.html?id=${item.id}`">
                   <p class="grid-img">
                      
                      <img :src="'sas/upload/'+item.img" />
                   </p>
                   <p class="grid-title">{{item.name}}</p>
                   <p class="grid-desc">{{item.jianJie}}</p>
                   <p class="grid-price">¥{{item.price}}</p>
                   <p class="grid-sales">銷量：{{item.sales}}</p>
                </a>
             </li>
          </ul>
       </div>
    </div> -->
	<!--熱銷單品-->
	<div id="hotPro" class="layout">
		<div class="layout">
			<div class="layout">
				<h2 class="title" style="float:left">熱銷單品</h2>
				<!-- <div class="orderBy">
                      <span @click="orderBy('price')">價格從低到高</span>&emsp;|&emsp;<span @click="orderBy('sales')">銷量從低到高</span>&emsp;|
                      <span @click="orderBy2('price')">價格從高到低</span>&emsp;|&emsp;<span @click="orderBy2('sales')">銷量從高到低</span>
                </div> -->
				<!-- <div class="hotPro-right">
                   <span>公告：</span>
                   <div class="notice">
                      <ul>
                      <li v-for="(item,index) in jsonggData" @click="toggDetail(item.g_title)" style="cursor:pointer">
                               {{item.g_title}}
                      </li>
                      </ul>
                      </div>
                </div> -->
			</div>
		</div>
		<div class="layout">
			<ul class="grid_ul">
				<li class="grid-items" v-for="(item,index) in jsonHotData">
					<a :href="`detail.html?id=${item.id}`">
						<p class="grid-img">
							<!--<img :src=`static/image/${item.img}` />-->
							<img :src="'sas/upload/'+item.img" />
						</p>
						<p class="grid-title">{{item.name}}</p>
						<!-- <p class="grid-desc">{{item.jianJie}}</p> -->
						<p class="grid-price">¥{{item.price}}</p>
						<p class="grid-sales">銷量：{{item.sales}}</p>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--底部廣告-->
	<div id="bottom_gg">
		<!-- <img src="static/image/bottomgg2.jpg" /> -->
	</div>
	<!--底部服務-->
	<div class="slogan-container">
		<div class="slogan">
			<ul>
				<li class="s1">
					<i></i> 百強企業 品質保證
				</li>
				<li class="s2">
					<i></i> 7天退貨 15天換貨
				</li>
				<li class="s3">
					<i></i> 48元起免運費
				</li>
				<li class="s4">
					<i></i> 1000家維修網點 全國聯保
				</li>
			</ul>
		</div>
	</div>
	<!--底部footer版權-->
	<div id="footer">
		<div class="foot">
			<!--<p class="foot_logo"><img src="static/image/flogo.png" /></p>-->
			<p class="">Designed and developed by chenwei huo.<br /> Copyright © 2010-2019 chenwei.com. All Rights Reserved.</p>
			<p class=""></p>
		</div>
	</div>
	<!--彈出-->
	<el-dialog title="登入/註冊" :center="true" :visible.sync="dialogFormVisible">
		<el-tabs v-model="activeName" :center="true" @tab-click="handleClick">
			<el-tab-pane label="登入" name="first">
				<el-form :model="form">
					<el-form-item label="帳號" style="display: none;" :label-width="formLabelWidth">
						<el-input v-model="form.userName" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="密碼" style="display: none;" :label-width="formLabelWidth">
						<el-input type="password" v-model="form.userPassword" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="帳號" :label-width="formLabelWidth">
						<el-input v-model="form.userName" autocomplete="off" placeholder="請輸入長度不超過18位元的字元"></el-input>
					</el-form-item>
					<p v-show="form.userName.length > 18" style="margin-left: 19%;color: red;font-size: 12px;">*帳號不能超過18位元字元</p>
					<el-form-item label="密碼" :label-width="formLabelWidth">
						<el-input type="password" v-model="form.userPassword" autocomplete="off" placeholder="請輸入長度不超過18位元的字元"></el-input>
					</el-form-item>
					<p v-show="form.userPassword.length > 18" style="margin-left: 19%;color: red;font-size: 12px;">*密碼不能超過18位元字元</p>
				</el-form>
			</el-tab-pane>
			<el-tab-pane label="註冊" name="second">
				<el-form :model="form">
					<el-form-item label="帳號" style="display: none;" :label-width="formLabelWidth">
						<el-input v-model="form.userName" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="密碼" style="display: none;" :label-width="formLabelWidth">
						<el-input type="password" v-model="form.userPassword" autocomplete="off"></el-input>
					</el-form-item>
					<el-form-item label="帳號" :label-width="formLabelWidth">
						<el-input v-model="form.userName" autocomplete="off" placeholder="請輸入長度6-18位元的字元"></el-input>
					</el-form-item>
					<p v-show="form.userName.length > 18 || form.userName.length < 6" style="margin-left: 19%;color: red;font-size: 12px;">*請輸入長度6-18位元的字元</p>
					<el-form-item label="密碼" :label-width="formLabelWidth">
						<el-input type="password" v-model="form.userPassword" autocomplete="off" placeholder="請輸入長度不超過18位元的字元"></el-input>
					</el-form-item>
					<p v-show="form.userPassword.length > 18 || form.userPassword.length < 6" style="margin-left: 19%;color: red;font-size: 12px;">*請輸入密碼長度6-18位元字元</p>
					<el-form-item label="確認密碼" :label-width="formLabelWidth">
						<el-input type="password" v-model="form.userPassword_2" autocomplete="off" placeholder="請輸入長度不超過18位元的字元"></el-input>
					</el-form-item>
					<p v-show="form.userPassword_2.length > 18 || form.userPassword_2.length < 6" style="margin-left: 19%;color: red;font-size: 12px;">*密碼不能超過18位元字元</p>
				</el-form>
			</el-tab-pane>

		</el-tabs>


		<div slot="footer" class="dialog-footer">
			<el-button v-show="activeName=='second'" :disabled="form.userName.length > 18 || form.userName.length < 6 || form.userPassword.length > 18 || form.userPassword.length < 6" @click="registered">註冊</el-button>
			<el-button v-show="activeName=='first'" type="primary" @click="login">登入</el-button>
		</div>

	</el-dialog>
</div>
</body>
<!-- <script>
/*
* 參數說明
* obj : 動畫的節點，本例中是ul
* top : 動畫的高度，本例中是-35px;注意向上滾動是負數
* time : 動畫的速度，即完成動畫所用時間，本例中是500毫秒，即marginTop從0到-35px耗時500毫秒
* function : 回呼函數，每次動畫完成，marginTop歸零，並把此時第一條資訊添加到清單最後;
* 
*/
function noticeUp(obj,top,time) {
$(obj).animate({
marginTop: top
}, time, function () {
$(this).css({marginTop:"0"}).find(":first").appendTo(this);
})
}
   $(function () {
   // 調用 公告滾動函數
   setInterval("noticeUp('.notice ul','-50px',500)", 2000);
   });
</script> -->
<script type="text/javascript">
	$(function() {
		var num = 0;
		function goLeft() {
			//750是根據你給的尺寸，可變的
			if (num == -450) {
				num = 0;
			}
			num -= 1;
			$(".scroll").css({
				left: num
			})
		}
		//設置滾動速度
		var timer = setInterval(goLeft, 20);
		//設置滑鼠經過時滾動停止
		$(".box").hover(function() {
					clearInterval(timer);
				},
				function() {
					timer = setInterval(goLeft, 20);
				})
	})
</script>
<script type="text/javascript">
	$(function() {
		// 初始化swiper
		var mySwiper = new Swiper('.swiper-container', {
			updateOnImagesReady: true,
			direction: 'horizontal',
			loop: true,
			autoplay: 8000,
			observer: true, //修改swiper自己或子元素時，自動初始化swiper
			// 如果需要前進後退按鈕
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			pagination: '.swiper-pagination',
		})
	})
</script>
<!--vue-->
<script type="text/javascript">
	// 註冊
	Vue.component('my-component', {});
	var WEITUOSERVER = new Vue({
		el: '#cdnvue',
		data: {
			activeName: 'first',
			jsonData: [],  //主頁產品
			jsonHotData:[], // 熱銷推薦的 顯示兩行
			jsonggData: [], // 公告數據
			searchVal:"", // 搜索
			dialogTableVisible: false,
			dialogFormVisible: false,
			form: {
				userName: '',
				userPassword: '',
				userPassword_2:'', //確認密碼
				type: [],
			},
			formLabelWidth: '120px',
			userInfo: window.sessionStorage.user ? JSON.parse(window.sessionStorage.user ) : "",
		},
		created() { 
			this.gatData();
			this.gatHotData();
			this.gatggData();
		},
		methods: {
			handleClick(tab, event) {
				console.log(tab, event);
			},
			gatData() {
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/index.php",
					data: {"searchall":"searchall"},
					dataType: "json",
					success: function(res) {
						that.jsonData = res.data;
					},
				});
			},
			// 搜索
			onsearchVal(){
				var arg = encodeURI(encodeURI(this.searchVal));
				window.location.href = "index_search.html?arg="+arg;
				// var that = this;
				// $.ajax({
				//     type: "GET",
				//          url: "php/index.php",
				//          data: {"searchVal":that.searchVal,"searchName":"searchName"},
				//          dataType: "json",
				//     success: function(res) {
				//        that.jsonData = res.data;
				//     },
				// });
			},
			// 排序--昇冪
			orderBy(arg){
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/index.php",
					data: {"orderBy":arg,"paixu":"paixu"},
					dataType: "json",
					success: function(res) {
						that.jsonData = res.data;
					},
				});
			},
			// 排序--降冪
			orderBy2(arg){
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/index.php",
					data: {"orderBy":arg,"paixu":"paixu","jiangxu":"jiangxu"},
					dataType: "json",
					success: function(res) {
						that.jsonData = res.data;
					},
				});
			},
			// hot 推薦產品--顯示兩行
			gatHotData(){
				var that = this;
				$.ajax({
					type: "GET",
					url: "php/index.php",
					data: {"orderBy":"sales","paixu":"paixu","jiangxu":"jiangxu"},
					dataType: "json",
					success: function(res) {
						that.jsonHotData = res.data.slice(0,8);
					},
				});
			},
			// 公告跳轉
			toggDetail(arg){
				var arg = encodeURI(encodeURI(arg));
				window.location.href = "gonggao.html?t="+arg;

			},
			// 獲取公告
			gatggData() {
				var that = this;
				$.ajax({
					type: "GET",
					url: "sas/gg.php",
					data: {"ggallList":"allList"},
					dataType: "json",
					success: function(res) {
						that.jsonggData = res;
					},
				});
			},
			login() {
				var that = this;
				this.dialogFormVisible = false;
				if(this.form.userName && this.form.userPassword){
					$.ajax({
						type: "get",
						url: "php/index.php",
						data: {"userName":that.form.userName,"userPassword":that.form.userPassword},
						dataType: "json",
						success: function(res) {

							if(res.resultCode == 0000){
								that.$message({
									message: '登入失敗：帳戶或密碼有誤',
									type: 'error'
								});
							}else{
								window.sessionStorage.user = JSON.stringify(res.data);
								that.userInfo = res.data;
								that.$message({
									message: '登入成功',
									type: 'success'
								});
							}
						},
						error:function(data){
							console.log(data)
						}
					});
				}else{
					that.$message({
						message: '帳戶或密碼不能為空',
						type: 'warning'
					});
				}
			},
			loginOut(){
				window.sessionStorage.user = "";
				window.location.reload();
			},
			registered() {
				var that = this;
				if(this.form.userPassword !== this.form.userPassword_2){
					that.$message({
						message: '兩次密碼不一致',
						type: 'error'
					});
					return;
				}
				this.dialogFormVisible = false;
				if(this.form.userName && this.form.userPassword){
					$.ajax({
						type: "get",
						url: "php/index.php",
						data: {"userName":that.form.userName,"userPassword":that.form.userPassword,"registered":"registered","uuid":that.uuid()},
						dataType: "json",
						success: function(res) {
							if(res.resultCode == "200"){
								that.$message({
									message: '註冊成功',
									type: 'success'
								});
							}else if(res.resultCode == "0001"){
								that.$message({
									message: '註冊失敗，此用戶已存在',
									type: 'warning'
								});
							}
						},
						error:function(){
							that.$message({
								message: '註冊失敗',
								type: 'error'
							});
						}
					});
				}else{
					that.$message({
						message: '帳戶或密碼不能為空',
						type: 'warning'
					});
				}
			},
			//uuid
			uuid () {
				function _s4(){
					return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
				}
				return _s4() + _s4() + '-' + _s4() + '-' + _s4() + '-' + _s4() + '-' + _s4() + _s4() + _s4();
			},
			car() {
				if(window.sessionStorage.user){
					window.location.href = "car.html"
				}else{
					this.$message({
						message: '請先登入',
						type: 'warning'
					});
				}
			},
			order(){
				if(window.sessionStorage.user){
					window.location.href = "order.html"
				}else{
					this.$message({
						message: '請先登入',
						type: 'warning'
					});
				}
			}
		}

	})
</script>

</html>

