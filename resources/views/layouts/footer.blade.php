<footer>
    <div class="container section contact">
        <h2>Contact</h2>

        <div class="row">
            <div class="col-md-6">
                <table>
                    @foreach(config('personal.social') as $social)
                        <tr>
                            <td class="config-title">{{ $social['header'] }}</td>
                            <td>
                                <a href="{{ $social['url'] }}" target="_blank">{{ $social['title'] }}</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="text-center copyright">
            <p class="no-margin">&copy; {{ date('Y') }} {{ config('personal.about.name') }} &#8226; All Rights Reserved</p>
        </div>
    </div>
</footer>
