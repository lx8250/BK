//导航栏点击事件
layui.use('element', function () {
    var element = layui.element; //导航的hover效果、二级菜单等功能，需要依赖element模块
    //监听导航点击
    element.on('nav(demo)', function (elem) {
        layer.msg(elem.text());
    });
});
//图片轮播
layui.use(['carousel', 'form'], function () {
    var carousel = layui.carousel
        , form = layui.form;
    //常规轮播
    carousel.render({
        elem: '#test1'
        , arrow: 'always'
    });
    //轮播图的设置
    carousel.render({
        elem: '#test1'
        , width: '640px'
        , height: '272px'
        , interval: 3000
    });
});