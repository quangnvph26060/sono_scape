@extends('frontend.layouts.master')

@section('content')
<x-breadcrumb />

    <div class="page-content">
        <div class="container contact-style1">
            <div class="row clearfix">
                <section class="col-lg-12">
                    <div class="map-container m-bottom-30">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14901.691763132383!2d105.76881420380478!3d20.975676842912925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acd3d29466d9%3A0x7ea342e97b5cbb6b!2zS2h1IMSRw7QgdGjhu4sgVsSDbiBRdcOhbiwgUC4gVsSDbiBRdcOhbiwgSMOgIMSQw7RuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1717686937697!5m2!1svi!2s"
                            width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-5 col-md-5 m-bottom-30">
                            <h1 class="heading heading-contact">
                                Công Ty TNHH Thiết Bị Y Tế Phú Việt
                            </h1>
                            <ul class="c-info-list">
                                <li class="m-bottom-10">
                                    <div class="clearfix">
                                        <i class="fas fa-map-marker f-left"></i>
                                        <div class="contact-e ">
                                            <p>
                                                B46- TT8, Khu đô thị Văn Quán- Quận Hà Đông- Hà Nội
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="m-bottom-10">
                                    <div class="clearfix">
                                        <i class="fas fa-phone-alt"></i>
                                        <p class="contact-e">
                                            <a href="tel:0934218397" aria-label="Liên hệ Phú Việt Medical">0934218397</a>
                                        </p>
                                    </div>
                                </li>
                                <li class="m-bottom-10">
                                    <div class="clearfix">
                                        <i class="fas fa-envelope"></i>
                                        <p class="contact-e">
                                            <a href="mailto:maysieuamsonoscape@gmail.com" class="contact-e color-base"
                                                aria-label="Liên hệ Phú Việt Medical">maysieuamsonoscape@gmail.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="heading">Form liên hệ</div>
                            <form method="POST" action="https://maysieuamsonoscape.com/submit-contact" id="contact_form"
                                class="contact-form">
                                <input type="hidden" name="_token" value="1DCofIoa42Mz9qxfQrsiazMO062LZk5VnTrU2bpH" />
                                <ul>
                                    <li class="clearfix">
                                        <div class="half-column">
                                            <label for="name" class="required d-inline-b">Họ tên</label>
                                            <input type="text" name="name" required id="name"
                                                class="width-100 form-control" />
                                        </div>
                                        <div class="half-column">
                                            <label for="email" class="required d-inline-b">Email</label>
                                            <input type="email" name="email" required id="email"
                                                class="width-100 form-control" />
                                        </div>
                                    </li>
                                    <li>
                                        <label for="phone" class="required d-inline-b">Số điện thoại</label>
                                        <input type="text" name="phone" required id="phone"
                                            class="width-100 form-control" />
                                    </li>
                                    <li>
                                        <label for="message" class="d-inline-b required">Tin nhắn</label>
                                        <textarea name="message" id="message" cols="30" rows="10" class="width-100 form-control" required></textarea>
                                    </li>
                                    <li class="clearfix">

                                        <div class="text-right float-right">
                                            <button class="btn btn--l btn-primary btn-item" type="submit">
                                                Gửi
                                            </button>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="alert alert-success" style="display: none"></div>
                                        <div class="alert alert-danger" style="display: none"></div>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
