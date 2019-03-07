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
                this.state = {
                    memberId: window.memberId
                }
                axios.defaults.headers.common['Authorization'] = 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjdiZmJkMTU4MWZmMDQwMGU1M2JlM2RiNjlkODUzODAzNTcwNjlhOWI4MmU4ZGZhMzNhM2MwOWU2MjJiMmEwMGVhMDc0MzhmZmJlN2E5Mzc3In0.eyJhdWQiOiIzIiwianRpIjoiN2JmYmQxNTgxZmYwNDAwZTUzYmUzZGI2OWQ4NTM4MDM1NzA2OWE5YjgyZThkZmEzM2EzYzA5ZTYyMmIyYTAwZWEwNzQzOGZmYmU3YTkzNzciLCJpYXQiOjE1NTE4NzUxMDAsIm5iZiI6MTU1MTg3NTEwMCwiZXhwIjoxNTgzNDk3NTAwLCJzdWIiOiIxIiwic2NvcGVzIjpbImFkbWluIl19.UKE1Ea2W-8x-yV_urFOWcwISyO3Uap3GedO31WOnhpa2x6TBppy5wjD6O3uZq7__YETDnAf-pSJnmP8yQ0ZvcKdGxV5LhGs5knzey6-W-ULRBKjHtSl7ujJG9dxVnGwW-nWEeh3msRYnjJtORXslCN9vtsaRtDz_7M7lP48_pJc1BEtwv7ciUXE-wuBDwVAczCzkFoiJIE_2Kp30py2AHWBN6d8DJyI4PHF3kz8vbU4zjV50UG2kK6Nq1gMQkgh05OCZuogQx9axTTfn50kf8omaQw46NzO674WbHMHPGor87pJY2GnN0ENzgF769bE4XV0yJVEAd2QkQnieF94sbZvl1foN9AjtAM5ro-IzkbfhdDhthJNSZ35004bMlq0_Rbx_mmS5HhEeC_Duwm0CzHo7Z6-Q6MnnWOUL5X5UZdEN8MKxh4Vv7pkR1rmLzQjkcxzNFVMBLFHyqJQxTQnCRfwHJWCoU7FhR0xT6xYRut9nfjroW7rxiY86pU9aM8KGP8asOA_sPX75ptvLa1vh68GNnAJFd2ApF07ciARicJUlAKvw1kNrIqMDcEff4mACYd6pIGarVX967J_9sBvotsbEwZTv0QrR9FACtLcvGrvUNoHArDJcZAwEJ_N25hBwjCRl2XDtt8MNFGdpMOdP8uVkI2kjpXo0Q0NOT9drH48';
            }
            render() {
                return <div className='tree-grid'>
                    <Tree nodeClick={0} routeLink={`https://api.dev.famtreedemo.com/api/admin/family-requests/tree/`} memberItem={this.state.memberId} />
                </div>;
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
