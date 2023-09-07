<?php return [
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Getting back to basics',
  ],
  'directory' => [
    'create_fail' => 'Nie można stworzyć katalogu: :name',
  ],
  'file' => [
    'create_fail' => 'Nie można stworzyć pliku: :name',
  ],
  'page' => [
    'invalid_token' => [
      'label' => 'Nieprawidłowy żeton bezpieczeństwa',
    ],
  ],
  'combiner' => [
    'not_found' => 'Połączony plik \':name\' nie istnieje.',
  ],
  'system' => [
    'name' => 'System',
    'menu_label' => 'System',
    'categories' => [
      'cms' => 'CMS',
      'misc' => 'Różne',
      'logs' => 'Logi',
      'mail' => 'Mail',
      'shop' => 'Sklep',
      'team' => 'Team',
      'users' => 'Użytkownicy',
      'system' => 'System',
      'social' => 'Społecznościowe',
      'events' => 'Wydarzenia',
      'customers' => 'Klienci',
      'my_settings' => 'Moje Ustawienia',
    ],
  ],
  'theme' => [
    'label' => 'Motyw',
    'unnamed' => 'Nienazwany motyw',
    'name' => [
      'label' => 'Nazwa motywu',
      'help' => 'Nazwij motyw unikalnym kodem, na przykład: RainLab.Vanilla',
    ],
  ],
  'themes' => [
    'install' => 'Zainstaluj motywy',
    'search' => 'szukaj motywów do instalacji...',
    'installed' => 'Zainstalowane motywy',
    'no_themes' => 'Brak motywów zainstalowanych z marketu.',
    'recommended' => 'Polecane',
    'remove_confirm' => 'Na pewno usunąć ten motyw?',
  ],
  'plugin' => [
    'label' => 'Wtyczka',
    'unnamed' => 'Wtyczka bez nazwy',
    'name' => [
      'label' => 'Nazwa Wtyczki',
      'help' => 'Nazwij wtyczkę unikalny kodem, np. RainLab.Blog',
    ],
  ],
  'plugins' => [
    'enable_or_disable' => 'Włącz lub wyłącz',
    'enable_or_disable_title' => 'Włącz lub Wyłącz Wtyczki',
    'install' => 'Zainstaluj wtyczki',
    'install_products' => 'Zainstaluj produkty',
    'search' => 'szukaj wtyczek do instalacji...',
    'installed' => 'Zainstalowane wtyczki',
    'no_plugins' => 'Brak wtyczek zainstalowanych z marketu.',
    'recommended' => 'Polecane',
    'remove' => 'Usuń',
    'refresh' => 'Odśwież',
    'disabled_label' => 'Wyłączona',
    'disabled_help' => 'Wyłączone wtyczki są ignorowane przez aplikację.',
    'frozen_label' => 'Zablokuj zaktualizacje',
    'frozen_help' => 'Zamrożone wtyczki będą pomijane w procesie aktualizacji.',
    'selected_amount' => 'Zaznaczono wtyczek: :amount',
    'remove_confirm' => 'Czy na pewno?',
    'remove_success' => 'Pomyślnie usunięto wtyczki z systemu.',
    'refresh_confirm' => 'Czy na pewno?',
    'refresh_success' => 'Pomyślnie odświeżono wtyczki przez system.',
    'disable_confirm' => 'Czy na pewno?',
    'disable_success' => 'Pomyślnie wyłączono wtyczki.',
    'enable_success' => 'Pomyślnie włączono wtyczki.',
    'unknown_plugin' => 'Wtyczki zostały usunięte z systemu plików.',
    'plugin_label' => 'Wtyczka',
    'select_label' => 'Wybierz Akcję...',
    'check_yes' => 'Tak',
    'check_no' => 'Nie',
    'unfrozen' => 'Aktualizacje Włączone',
    'enabled' => 'Wtyczka Włączona',
    'freeze' => 'wyłączyć aktualizacje dla wybranych wtyczek',
    'unfreeze' => 'włączyć aktualizacje dla wybranych wtyczek',
    'enable' => 'włączyć wybrane wtyczki',
    'disable' => 'wyłączyć wybrane wtyczki',
    'freeze_label' => 'Wyłącz Aktualizacje',
    'unfreeze_label' => 'Włącz Aktualizacje',
    'enable_label' => 'Włącz Wtyczki',
    'disable_label' => 'Wyłącz Wtyczki',
    'refresh_label' => 'Zresetuj dane wtyczki',
    'action_confirm' => 'Czy na pewno chcesz :action ?',
    'freeze_success' => 'Pomyślnie wyłączono aktualizacje dla wybranych wtyczek.',
    'unfreeze_success' => 'Pomyślnie włączono aktualizacje dla wybranych wtyczek.',
  ],
  'project' => [
    'attach' => 'Podłącz Projekt',
    'detach' => 'Odłącz Projekt',
    'none' => 'Żaden',
    'id' => [
      'missing' => 'Proszę podać ID projektu do użycia.',
    ],
    'detach_confirm' => 'Czy na pewno chcesz odłaczyć ten projekt?',
    'unbind_success' => 'Projekt został pomyślnie odłączony.',
  ],
  'settings' => [
    'search' => 'Szukaj',
  ],
  'mail' => [
    'smtp_ssl' => 'Połączenie SSL wymagane',
    'drivers_hint_header' => 'Nie zainstalowano sterowników',
    'drivers_hint_content' => 'Ta opcja wysyłki wiadomości wymaga zainstalowania wtyczki ":plugin".',
  ],
  'mail_templates' => [
    'menu_label' => 'Szablony wiadomości email',
    'menu_description' => 'Modyfikuj szablony wiadomości wysyłanych do użytkowników, administratorów. Zarządzaj układami wiadomości.',
    'new_template' => 'Nowy Szablon',
    'new_layout' => 'Nowy Układ',
    'new_partial' => 'Nowy Fragment',
    'template' => 'Szablon',
    'templates' => 'Szablony',
    'partial' => 'Fragment',
    'partials' => 'Fragmenty',
    'menu_layouts_label' => 'Układy wiadomości',
    'menu_partials_label' => 'Fragmenty wiadomości',
    'layout' => 'Układ',
    'layouts' => 'Układy',
    'no_layout' => '-- Brak układu --',
    'name' => 'Nazwa',
    'name_comment' => 'Unikalna nazwa odwołująca się do tego szablonu',
    'code' => 'Kod',
    'code_comment' => 'Unikalny kod',
    'subject' => 'Temat',
    'subject_comment' => 'Temat wiadomości',
    'description' => 'Opis',
    'content_html' => 'HTML',
    'content_css' => 'CSS',
    'content_text' => 'Plaintext',
    'test_send' => 'Wyślij wiadomość testową',
    'test_success' => 'Wiadomość testowa została wysłana pomyślnie.',
    'test_confirm' => 'Wyślij wiadomość testową do :email. Kontynuować?',
    'creating' => 'Tworzenie Szablonu...',
    'creating_layout' => 'Tworzenie Układu...',
    'saving' => 'Zapisywanie Szablonu...',
    'saving_layout' => 'Zapisywanie Układu...',
    'delete_confirm' => 'Usunąć ten szablon?',
    'delete_layout_confirm' => 'Usunąć ten układ?',
    'deleting' => 'Usuwanie Szablonu...',
    'deleting_layout' => 'Usuwanie Układu...',
    'sending' => 'Wysyłanie testowej wiadomości...',
    'return' => 'Wróć do listy szablonów',
  ],
  'mail_brand' => [
    'menu_label' => 'Branding wiadomości email',
    'menu_description' => 'Modyfikuj kolory i wygląd szablonów wiadomości emails.',
    'page_title' => 'Modifykuj wygląd wiadomości',
    'sample_template' => [
      'heading' => 'Nagłówek',
      'paragraph' => 'To jest paragraf wypełniony Lorem Ipsum oraz linkiem. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
      'table' => [
        'item' => 'Pozycja',
        'description' => 'Opis',
        'price' => 'Cena',
        'centered' => 'Wyśrodkowane',
        'right_aligned' => 'Do prawej',
      ],
      'buttons' => [
        'primary' => 'Główny przycisk',
        'positive' => 'Pozytywny przycisk',
        'negative' => 'Negatywny przycisk',
      ],
      'panel' => 'Czyż ten panel nie jest wspaniały?',
      'more' => 'Trochę dodatkowego tekstu',
      'promotion' => 'Kod kuponu: OCTOBER',
      'subcopy' => 'To jest dopisek do wiadomości',
      'thanks' => 'Dziękujemy',
    ],
    'fields' => [
      '_section_background' => 'Tło',
      'body_bg' => 'Główne tło',
      'content_bg' => 'Tło treści',
      'content_inner_bg' => 'Wewnętrzne tło treści',
      '_section_buttons' => 'Przyciski',
      'button_text_color' => 'Kolor tekstu przycisków',
      'button_primary_bg' => 'Kolor tła głównego przycisku',
      'button_positive_bg' => 'Kolor tła pozytywnego przycisku',
      'button_negative_bg' => 'Kolor tła negatywnego przycisku',
      '_section_type' => 'Typografia',
      'header_color' => 'Kolor górnego nagłówka',
      'heading_color' => 'Kolor nagłówków',
      'text_color' => 'Kolor tekstu',
      'link_color' => 'Kolor linków',
      'footer_color' => 'Kolor stopki',
      '_section_borders' => 'Ramki',
      'body_border_color' => 'Kolor głównej ramki',
      'subcopy_border_color' => 'Kolor ramki dopiska',
      'table_border_color' => 'Kolor ramki tabeli',
      '_section_components' => 'Komponenty',
      'panel_bg' => 'Kolor panela',
      'promotion_bg' => 'Tło promocji',
      'promotion_border_color' => 'Kolor ramki promocji',
    ],
  ],
  'install' => [
    'plugin_label' => 'Zainstaluj Wtyczkę',
    'theme_label' => 'Zainstaluj Motyw',
  ],
  'updates' => [
    'plugin_name' => 'Nazwa',
    'plugin_code' => 'Kod',
    'plugin_description' => 'Opis',
    'plugin_version' => 'Wersja',
    'plugin_author' => 'Autor',
    'plugin_not_found' => 'Plugin not found',
    'core_build' => 'Aktualna wersja :build',
    'core_build_help' => 'Jest dostępna nowa wersja systemu.',
    'themes' => 'Motywy',
    'plugin_version_none' => 'Nowa wtyczka',
    'plugin_current_version' => 'Aktualna wersja',
    'theme_new_install' => 'Zainstaluj nowy motyw.',
    'theme_extracting' => 'Rozpakowywanie motywu: :name',
    'update_label' => 'Aktualizuj',
    'update_loading' => 'Wczytywanie dostępnych aktualizacji...',
    'force_label' => 'Zmuś do aktualizacji',
    'found' => [
      'label' => 'Znaleziono nowe aktualizacje!',
      'help' => 'Kliknij Aktualizuj, aby rozpocząć proces aktualizacji.',
    ],
    'none' => [
      'label' => 'Brak aktualizacji',
      'help' => 'Brak nowych aktualizacji.',
    ],
    'important_action' => [
      'empty' => 'Wybierz działanie',
      'confirm' => 'Zatwierdź aktualizację',
      'skip' => 'Pomiń tę wtyczkę (tylko teraz)',
      'ignore' => 'Pomiń tę wtyczkę (zawsze)',
    ],
    'important_action_required' => 'Wymagane działanie',
    'important_view_guide' => 'Zobacz instrukcje aktualizacji',
    'important_alert_text' => 'Niektóre aktualizacje wymagają twojej uwagi.',
    'details_title' => 'Szeczóły Wtyczki',
    'details_view_homepage' => 'Zobacz stronę domową',
    'details_current_version' => 'Aktualna wersja',
    'details_author' => 'Autor',
  ],
  'server' => [
    'connect_error' => 'Błąd połączenia do serwera.',
    'response_not_found' => 'Serwer aktualizacji nie został odnaleziony.',
    'response_invalid' => 'Nieprawidłowa odpowiedź serwera.',
    'response_empty' => 'Pusta odpowiedź serwera.',
    'file_error' => 'Serwerowi nie udało się dostarczyć pakietu.',
    'file_corrupt' => 'Plik pobrany z serwera jest uszkodzony.',
  ],
  'behavior' => [
    'missing_property' => 'Class :class must define property $:property used by :behavior behavior.',
  ],
  'config' => [
    'not_found' => 'Plik konfiguracyjny :file nie został znaleziony w :location.',
    'required' => 'Konfiguracja użyta w :location musi definiować wartość \':property\'.',
  ],
  'zip' => [
    'extract_failed' => 'Rozpakowywanie pliku \':file\' nie powiodło się.',
  ],
  'event_log' => [
    'hint' => 'Ten log wyświetla listę potencjalnych błędów, które mogły wystąpić w aplikacji, takich jak wyjątki oraz informacje debugowania.',
    'menu_label' => 'Dziennik zdarzeń',
    'menu_description' => 'Zobacz wiadomości logów systemu wraz z ich zarejestrowanym czasem oraz szczegółami.',
    'empty_link' => 'Opróżnij dziennik zdarzeń',
    'empty_loading' => 'Opróżnianie dziennika zdarzeń...',
    'empty_success' => 'Prawidłowo opróżniono dziennik zdarzeń.',
    'return_link' => 'Powrót do dziennika zdarzeń',
    'id' => 'ID',
    'id_label' => 'ID Zdarzenia',
    'created_at' => 'Data & Czas',
    'message' => 'Wiadomośc',
    'level' => 'Poziom',
    'preview_title' => 'Zdarzenie',
  ],
  'request_log' => [
    'hint' => 'Ten log wyświetla listę żądań przeglądarki, które mogą wymagać Twojej uwagi. Dla przykładu, jeżeli odwiedzający otworzy stronę CMS, której nie można odnaleźć, rekord zostanie stworzony z kodem błędu 404.',
    'menu_label' => 'Log żądań',
    'menu_description' => 'Zobacz złe lub przekierowane żądania, takie jak Strona nie została odnaleziona (404).',
    'empty_link' => 'Opróźnij log żądań',
    'empty_loading' => 'Opróżnianie logu żądań...',
    'empty_success' => 'Prawidłowo opróżniono log żądań.',
    'return_link' => 'Powrót do logu żądań',
    'id' => 'ID',
    'id_label' => 'Log ID',
    'count' => 'Licznik',
    'referer' => 'Odsyłający',
    'url' => 'URL',
    'status_code' => 'Status',
    'preview_title' => 'Żądanie',
  ],
  'permissions' => [
    'name' => 'System',
    'manage_system_settings' => 'Zarządzaj ustawienia systemu',
    'manage_software_updates' => 'Zarządzaj aktualizacjami – software',
    'access_logs' => 'Przeglądaj logi systemowe',
    'manage_mail_templates' => 'Zarządzaj szablonami wiadomości',
    'manage_mail_settings' => 'Zarządzaj ustawieniami wiadomości',
    'manage_other_administrators' => 'Zarządzaj innymi administratorami',
    'manage_preferences' => 'Zarządzaj ustawieniami backend',
    'manage_editor' => 'Zarządzaj ustawieniami edytora kodu',
    'manage_branding' => 'Personalizuj zaplecze',
  ],
  'log' => [
    'menu_label' => 'Ustawienia logowania',
    'menu_description' => 'Skonfiguruj logowane wydarzenia',
    'default_tab' => 'Logowanie',
    'log_events' => 'Loguj wydarzenia systemowe',
    'log_events_comment' => 'Zapisuj do bazy danych (oprócz zapisywania do pliku)',
    'log_requests' => 'Loguj nieprawidłowe żądania',
    'log_requests_comment' => 'Żadania przeglądarek, które mogą wymagać uwagi (na z odpowiedzią 404 Nie znaleziono)',
    'log_theme' => 'Loguj zmiany motywu',
    'log_theme_comment' => 'Loguje zmiany w motywie dokonane przez sekcję CMS.',
  ],
  'media' => [
    'invalid_path' => 'Wybrano nieprawidłową ścieżkę pliku: \':path\'.',
    'folder_size_items' => 'element(y)',
  ],
];
