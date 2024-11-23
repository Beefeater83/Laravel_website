@extends('layout/main')

@section('page-title')
{{ $pagetitle }} 
@endsection

@section('content')

     <div class="content">
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d40655.21538767302!2d30.483016474782378!3d50.44201406757401!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cfa04a0c8e5b%3A0x3b40a2bcbca08807!2z0JrQuNC10LLQvi3Qn9C10YfQtdGA0YHQutCw0Y8g0LvQsNCy0YDQsA!5e0!3m2!1sru!2sua!4v1730200547947!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="contacts">
            <div class="contacts-head">
                <h1>Наши контакти</h1>
            </div>

            <div class="contacts-list">
                <div>
                    <h3>АДРЕСА</h3>
                    <p class="contacts-data">01015, м.Київ</p>
                    <p class="contacts-data">вул.Лаврська 15</p>
                </div>
                <div>
                    <h3>КОНТАКТИ</h3>
                    <p class="contacts-data">Phone: +380672625599</p>
                    <p class="contacts-data">Email: sergey@gmail.com</p>
                </div>
                <div>
                    <h3>ЧАСИ РОБОТИ</h3>
                    <p class="contacts-data">MON-FRI 9:00-19:00</p>
                    <p class="contacts-data">SAT-SUN 10:00-14:00</p>
                </div>
                <div>
                    <h3>СОЦ МЕРЕЖИ</h3>
                    <div class="networks">
                        <div><i class="fa-brands fa-youtube"></i></div>
                        <div><i class="fa-brands fa-facebook-f"></i></div>
                        <div><i class="fa-brands fa-twitter"></i></div>
                        <div><i class="fa-brands fa-google"></i></div>
                    </div>
                </div>

            </div>
        </div>
     </div>

    
@endsection