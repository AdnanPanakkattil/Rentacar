<div class="dropdown">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown">
        {{ getCurrentLocaleData()['flag'] ?? '🌐' }} {{ getCurrentLocaleData()['name'] ?? 'Language' }}
    </button>
    <ul class="dropdown-menu {{ isRtl() ? 'dropdown-menu-start' : 'dropdown-menu-end' }}">
        @foreach(getAvailableLocales() as $code => $locale)
            <li>
                <a class="dropdown-item {{ app()->getLocale() == $code ? 'active' : '' }}" 
                   href="{{ route('language.switch', $code) }}">
                    {{ $locale['flag'] }} {{ $locale['name'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>