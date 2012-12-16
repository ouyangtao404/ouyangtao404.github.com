/**
 * 轮播
 */
KISSY.add('custom-slide', function(S) {
	var D = S.DOM,
		E = S.Event;
	
	function CustomSlide(container, config) {
		var self = this;
        if(S.isString(container)) {
            self.container = D.get(container);
        }
        if(!container) {
            S.log('请配置正确的id.');
            return;
        }
        self._init(config || {});
	}	

	S.augment(CustomSlide, {
		_init: function(config) {
			var self = this;
			S.use('anim',function(S,Anim){
				self.Anim = Anim;
				
				self._setParam(config);
				self._setStructure(config);
				self._bindEvent();
			});
		},
		_setParam: function(config) {
			var self = this;
			
			self.config = config;
			self.imgBox = D.get('.img-box', self.container);
			self.img = D.get('.img-pic', self.container);
		},
		_setStructure: function() {
			var self = this;
			
			//容器宽度
			var conWidth = D.width(self.container);
			var imgBoxWidth = D.width(self.imgBox);
			var imgWidth = D.width(self.img);
			
			var yushu = imgWidth % conWidth;
			var num = parseInt(imgWidth / conWidth, 10);
			var screenNum = (yushu > 0) ? num + 1 : num ;
			
			D.width(self.imgBox, screenNum * conWidth);
			
			//初始化、resize都把图片容器left重置
			new self.Anim(self.imgBox, {
				left: 0
			}, 0.3, 'easeOut', function() {}).run();
			
			//总页数
			self.pageTotal = screenNum;
			//当前页数
			self.pageCurrent = 1;
			//每页宽度
			self.pageWidth = conWidth;
			
			var o = self.config;
			if(o.dot) {
				dots = [];
				for(var i = 0; i < screenNum; i++) {
					if(i === 0) {
						dots[dots.length] = '<li class="dot current"><a class="dot-a" href="javascript:void(0);">'+ (i+1) +'</a></li>';
					} else {
						dots[dots.length] = '<li class="dot"><a class="dot-a" href="javascript:void(0);">'+ (i+1) +'</a></li>';
					}
				}
				oldDots = D.get('.dots', self.container);
				
				dotsStr = dots.join('');
				//已经存在容器
				if(oldDots) {
					D.html(oldDots, dotsStr);
					return;
				}
				//不存在容器
				var dots = '<ul class="dots">'+ dotsStr +'</ul>';
				D.append(D.create(dots), self.container);
			}
			
		},
		_turnPage: function(index) {
			var self = this;

			if(index > self.pageTotal) {
				index = 1;
			} else if(index < 1) {
				index = self.pageTotal;
			}
			
			self.pageCurrent = index;
			
			var turnWidth = - ((index - 1) * self.pageWidth);
			
			var x = new self.Anim(self.imgBox, {
				left: turnWidth
			}, 0.3, 'easeOut', function() {});
			x.run();
			
			//设置当前dot
			if(!self.config.dot)return;
			var dots = D.query('.dot', self.container);
			var len = dots.length;
			for(var i = 0; i < len; i++) {
				if(D.hasClass(dots[i], 'current')) {
					D.removeClass(dots[i], 'current');
				}
				if((i + 1) === index) {
					D.addClass(dots[i], 'current');
				}
			}
		},
		_dotEvent: function() {
			var self = this;
			
			E.delegate(self.container, 'click', '.dot-a', function(e) {
				e.halt();
				var tar = e.target;
				var newPage = parseInt(D.html(tar), 10);
				if(newPage === self.pageCurrent) return;
				self._turnPage(newPage);
			});
			
		},
		_bindEvent: function() {
			var self = this;
			var prevBtn = D.get('.prev', self.container);
			var nextBtn = D.get('.next', self.container);
			var timer;
			
			self._dotEvent();
			
			E.on(window, 'resize', function(e) {
				if(timer) {
					clearTimeout(timer);
				}
				timer = setTimeout(function(){
					self._setStructure();
					clearTimeout(timer);
				}, 300);
			});
			//上一页
			E.on(prevBtn, 'click', function(e) {
				self.toPrev();
			});
			//下一页
			E.on(nextBtn, 'click', function(e) {
				self.toNext();
			});
		},
		toNext: function() {
			var self = this;
			var newPage = self.pageCurrent + 1;
			self._turnPage(newPage);
		},
		toPrev: function() {
			var self = this;
			var newPage = self.pageCurrent - 1;
			self._turnPage(newPage);
		}
	});
	
	S.CustomSlide = CustomSlide;
   	return CustomSlide;
});










