<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
        <title>Tree</title>
    </head>
    <body>
    {{--<h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.</h3>--}}
    <div id="root"></div>
    <script src="https://unpkg.com/react@16.7.0/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@16.7.0/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.26.0/babel.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/d3@5.7.0/dist/d3.min.js"></script>
    <script src="https://unpkg.com/prop-types@15.6.2/prop-types.min.js"></script>
    <script src="https://unpkg.com/require-unpkg@0.5.2/dist/require.min.js"></script>
    <script src="https://unpkg.com/regenerator-runtime@0.12.1/runtime.js"></script>
    <script src="{{asset('/js/react-tree.js')}}"></script>
    {{--<script src="{{asset('/js/react-main.js')}}"></script>--}}
    <script>
        window.memberId = {{$memberId}}
    </script>
    <script type="text/babel">
        class App extends React.Component {
            constructor(props) {
                super(props)
                // this.state = {
                //     memberId: window.memberId
                // }
                // axios.defaults.headers.common['Authorization'] = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdiZmJkMTU4MWZmMDQwMGU1M2JlM2RiNjlkODUzODAzNTcwNjlhOWI4MmU4ZGZhMzNhM2MwOWU2MjJiMmEwMGVhMDc0MzhmZmJlN2E5Mzc3In0.eyJhdWQiOiIzIiwianRpIjoiN2JmYmQxNTgxZmYwNDAwZTUzYmUzZGI2OWQ4NTM4MDM1NzA2OWE5YjgyZThkZmEzM2EzYzA5ZTYyMmIyYTAwZWEwNzQzOGZmYmU3YTkzNzciLCJpYXQiOjE1NTE4NzUxMDAsIm5iZiI6MTU1MTg3NTEwMCwiZXhwIjoxNTgzNDk3NTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbImFkbWluIl19.UKE1Ea2W-8x-yV_urFOWcwISyO3Uap3GedO31WOnhpa2x6TBppy5wjD6O3uZq7__YETDnAf-pSJnmP8yQ0ZvcKdGxV5LhGs5knzey6-W-ULRBKjHtSl7ujJG9dxVnGwW-nWEeh3msRYnjJtORXslCN9vtsaRtDz_7M7lP48_pJc1BEtwv7ciUXE-wuBDwVAczCzkFoiJIE_2Kp30py2AHWBN6d8DJyI4PHF3kz8vbU4zjV50UG2kK6Nq1gMQkgh05OCZuogQx9axTTfn50kf8omaQw46NzO674WbHMHPGor87pJY2GnN0ENzgF769bE4XV0yJVEAd2QkQnieF94sbZvl1foN9AjtAM5ro-IzkbfhdDhthJNSZ35004bMlq0_Rbx_mmS5HhEeC_Duwm0CzHo7Z6-Q6MnnWOUL5X5UZdEN8MKxh4Vv7pkR1rmLzQjkcxzNFVMBLFHyqJQxTQnCRfwHJWCoU7FhR0xT6xYRut9nfjroW7rxiY86pU9aM8KGP8asOA_sPX75ptvLa1vh68GNnAJFd2ApF07ciARicJUlAKvw1kNrIqMDcEff4mACYd6pIGarVX967J_9sBvotsbEwZTv0QrR9FACtLcvGrvUNoHArDJcZAwEJ_N25hBwjCRl2XDtt8MNFGdpMOdP8uVkI2kjpXo0Q0NOT9drH48';
            }
            render() {
                // const $tree = '{"root":{"id":21764,"name":"Mosbah Father","image":["https:\\/\\/api.dev.famtreedemo.com\\/storage\\/200\\/images\\/other@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","family":{"name":"Deeb","family_color":"#00C229","verified":""},"no_parent":true,"hidden":false,"level":1,"main":true,"children":[{"id":21699,"name":"Mosbah","image":["https:\\/\\/api.dev.famtreedemo.com\\/storage\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":2,"main":true,"children":[{"id":18395,"name":"Yasser","image":["https:\\/\\/api.dev.famtreedemo.com\\/storage\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":3,"main":true,"children":[{"id":21926,"name":"Maher","image":["https:\\/\\/api.dev.famtreedemo.com\\/storage\\/200\\/images\\/default_male_active@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":"2019-01-17","me":true,"background_color":"#00C229","font_color":"#FFF","border_color":"#00C229","no_parent":false,"hidden":false,"level":4,"main":true},{"id":21668,"name":"Adeeb","image":["https:\\/\\/api.dev.famtreedemo.com\\/storage\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":4}]},{"id":21839,"name":"Auman","image":["https:\\/\\/api.dev.famtreedemo.com\\/storage\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":3}]},{"id":21701,"name":"Ali","image":["https:\\/\\/api.dev.famtreedemo.com\\/storage\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":2}]}}';
                const $tree = '{"root":{"id":55179,"name":"\u0645\u0633\u0639\u0631 \u0627\u0644\u0627\u0628","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/other@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","family":{"name":"\u0627\u0644\u0632\u0647\u064a\u0631\u064a","family_color":"#00C229","verified":""},"no_parent":true,"hidden":false,"level":1,"main":true,"children":[{"id":55177,"name":"\u0645\u0633\u0639\u0631","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":2,"main":true,"children":[{"id":55144,"name":"\u0645\u0633\u0641\u0631","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male_gray@x2.png"],"gender":1,"is_alive":false,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#818285","font_color":"#FFF","border_color":"#818285","no_parent":false,"hidden":false,"level":3,"main":true,"children":[{"id":39979,"name":"\u062d\u0633\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male_gray@x2.png"],"gender":1,"is_alive":false,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#818285","font_color":"#FFF","border_color":"#818285","no_parent":false,"hidden":false,"level":4,"main":true,"children":[{"id":39975,"name":"\u0639\u0628\u062f\u0627\u0644\u0644\u0647","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male_gray@x2.png"],"gender":1,"is_alive":false,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#818285","font_color":"#FFF","border_color":"#818285","no_parent":false,"hidden":false,"level":5,"main":true,"children":[{"id":41142,"name":"\u0639\u0628\u062f\u0627\u0644\u0648\u0647\u0627\u0628","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":6,"children":[{"id":55296,"name":"\u0639\u0628\u062f\u0627\u0644\u0644\u0647","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7},{"id":55295,"name":"Mohammed","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7}]},{"id":29637,"name":"\u0635\u0627\u0644\u062d","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":6,"children":[{"id":55738,"name":"\u0645\u0639\u0627\u0630","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7},{"id":55531,"name":"\u0641\u0647\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7}]},{"id":55716,"name":"\u0633\u0627\u0644\u0645","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":6,"children":[{"id":54491,"name":"\u0631\u0627\u0643\u0627\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7},{"id":41158,"name":"\u0631\u0634\u064a\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7}]},{"id":35796,"name":"\u0646\u0627\u064a\u0641","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":6,"main":true,"children":[{"id":54552,"name":"\u062e\u0627\u0644\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7},{"id":41009,"name":"\u0645\u0627\u062c\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male_active@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":"2002-03-17","me":true,"background_color":"#00C229","font_color":"#FFF","border_color":"#00C229","no_parent":false,"hidden":false,"level":7,"main":true},{"id":55751,"name":"\u0633\u0639\u0648\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7}]},{"id":41056,"name":"\u0631\u0634\u064a\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male_gray@x2.png"],"gender":1,"is_alive":false,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#818285","font_color":"#FFF","border_color":"#818285","no_parent":false,"hidden":false,"level":6,"children":[{"id":41220,"name":"\u0639\u0628\u062f\u0627\u0644\u0631\u062d\u0645\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7}]},{"id":40960,"name":"Mohammed","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":6,"children":[{"id":55188,"name":"\u062a\u0631\u0643\u064a","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7,"children":[{"id":55227,"name":"Mohammed","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8}]},{"id":53826,"name":"\u0633\u0644\u0637\u0627\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7},{"id":55217,"name":"\u0633\u0644\u0645\u0627\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7,"children":[{"id":54490,"name":"\u0645\u0647\u0646\u0649","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8}]}]},{"id":41098,"name":"\u062d\u0645\u0648\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":6,"children":[{"id":55299,"name":"\u0639\u0628\u062f\u0627\u0644\u0631\u062d\u0645\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7},{"id":55312,"name":"\u0639\u0628\u062f\u0627\u0644\u0645\u062d\u0633\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7},{"id":55225,"name":"\u0639\u0628\u062f\u0627\u0644\u0639\u0632\u064a\u0632","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7,"children":[{"id":55282,"name":"\u0639\u0628\u062f\u0627\u0644\u0645\u062d\u0633\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8},{"id":55283,"name":"\u062d\u0645\u0648\u062f","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8}]},{"id":55311,"name":"\u0639\u0628\u062f\u0627\u0644\u0648\u0647\u0627\u0628","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7,"children":[{"id":55258,"name":"\u0639\u0628\u062f\u0627\u0644\u0644\u0647","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8}]},{"id":55224,"name":"\u0639\u0628\u062f\u0627\u0644\u0644\u0647","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":7,"children":[{"id":55279,"name":"\u0641\u064a\u0635\u0644","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8},{"id":55280,"name":"\u0639\u0628\u062f\u0627\u0644\u0639\u0632\u064a\u0632","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8},{"id":55209,"name":"\u0639\u0628\u062f\u0627\u0644\u0645\u062d\u0633\u0646","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male@x2.png"],"gender":1,"is_alive":true,"marry_data":null,"birthday":null,"me":false,"background_color":"#FFF","font_color":"#000","border_color":"#3BAAE5","no_parent":false,"hidden":false,"level":8}]}]}]},{"id":55530,"name":"\u0634\u0627\u064a\u0642","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male_gray@x2.png"],"gender":1,"is_alive":false,"marry_data":{"id":1,"name":"Married","marry_date":""},"birthday":null,"me":false,"background_color":"#818285","font_color":"#FFF","border_color":"#818285","no_parent":false,"hidden":false,"level":5,"children":[{"id":54854,"name":"\u0639\u0628\u062f\u0627\u0644\u0644\u0647","image":["https:\\/\\/assets.famtree.me\\/200\\/images\\/default_male_gray@x2.png"],"gender":1,"is_alive":false,"marry_data":null,"birthday":null,"me":false,"background_color":"#818285","font_color":"#FFF","border_color":"#818285","no_parent":false,"hidden":false,"level":6}]}]}]}]}]}}';
                return <div className='tree-grid'>
                    <Tree nodeClick={0} treeNodes={$tree} routeLink={``} memberItem={0} />
                </div>;
            }
            componentDidMount() {
                const $w = document.getElementById('mytree').width.baseVal.value;
                const $h = document.getElementById('mytree').height.baseVal.value;
                const urlParams = new URLSearchParams(window.location.search);
                const $x = urlParams.get('w');
                const $y = urlParams.get('h');
                if($x==null && $y==null) {
                    window.location.href = 'http://svg-lab.tk/save-svg/21079?w=100&h=200';//window.location.href + '?w=' + $w + '&h=' + $h;
                    window.reload();
                }
            }
        }

        ReactDOM.render(
            <App />,
            document.getElementById('root')
        );
    </script>
    {{--{{$memberId}}--}}
    </body>
</html>
