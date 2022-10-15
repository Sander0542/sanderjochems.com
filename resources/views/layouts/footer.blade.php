<footer>
    <div class="container section contact">
        <h2>Contact</h2>

        <div class="row">
            <div class="col-md-6">
                <table>
                    <tr>
                        <td class="config-title">Email</td>
                        <td>
                            <a href="{{ config('personal.social.email.url') }}" target="_blank">{{ config('personal.social.email.title') }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="config-title">LinkedIn</td>
                        <td>
                            <a href="{{ config('personal.social.linkedin.url') }}" target="_blank">{{ config('personal.social.linkedin.title') }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="config-title">GitHub</td>
                        <td>
                            <a href="{{ config('personal.social.github.url') }}" target="_blank">{{ config('personal.social.github.title') }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="config-title">Twitter</td>
                        <td>
                            <a href="{{ config('personal.social.twitter.url') }}" target="_blank">{{ config('personal.social.twitter.title') }}</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="text-center copyright">
            <p class="no-margin">&copy; {{ date('Y') }} {{ config('personal.about.name') }} &#8226; All Rights Reserved</p>
        </div>
    </div>
</footer>
