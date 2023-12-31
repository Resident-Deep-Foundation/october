<?php return [
  'cms_object' => [
    'invalid_file' => 'Ungültiger Dateiname: :name. Diese dürfen nur alphanumerische Symbole, Unter- und Bindestriche sowie Punkte enthalten. Beispiele: page.htm, page, subdirectory/page',
    'invalid_property' => 'Die Eigenschaft ":name" kann nicht angewendet werden',
    'file_already_exists' => 'Datei ":name" existiert bereits.',
    'error_saving' => 'Fehler beim Speichern von ":name".',
    'error_creating_directory' => 'Fehler beim Erstellen von Verzeichnis mit Namen :name',
    'invalid_file_extension' => 'Ungültige Dateiendung: :invalid. Erlaubt sind: :allowed.',
    'error_deleting' => 'Fehler beim Löschen der Template-Datei ":name".',
    'delete_success' => 'Templates wurden erfolgreich gelöscht: :count.',
    'file_name_required' => 'Ein Dateiname ist erforderlich.',
    'safe_mode_enabled' => 'Der abgesicherte Modus ist derzeit aktiviert. Die Bearbeitung des PHP-Codes von CMS-Templates ist deaktiviert. Um den abgesicherten Modus zu deaktivieren, setzen Sie den Konfigurationswert `cms.safe_mode` auf `false`.',
  ],
  'dashboard' => [
    'active_theme' => [
      'widget_title_default' => 'Website',
      'online' => 'Online',
      'maintenance' => 'In der Wartung',
      'manage_themes' => 'Themes Verwalten',
      'customize_theme' => 'Theme anpassen',
    ],
  ],
  'theme' => [
    'active' => [
      'not_set' => 'Aktives Theme nicht definiert',
      'not_found' => 'Aktives Theme wurde nicht gefunden.',
    ],
    'edit' => [
      'not_set' => 'Edit Theme nicht definiert',
      'not_found' => 'Edit Theme nicht gefunden.',
      'not_match' => 'Das Objekt, das sie anzupassen versuchen gehört nicht zum Theme in Bearbeitung. Bitte laden Sie die Seite erneut.',
    ],
  ],
  'maintenance' => [],
  'page' => [
    'not_found_name' => 'Die Seite \':name\' konnte nicht gefunden werden',
    'not_found' => [
      'label' => 'Seite nicht gefunden',
      'help' => 'Die angeforderte Seite kann nicht gefunden werden.',
    ],
    'custom_error' => [
      'label' => 'Seitenfehler',
      'help' => 'Entschuldigung, ein Fehler trat auf, sodass die gewünschte Seite nicht angezeigt werden kann.',
    ],
    'menu_label' => 'Seiten',
    'unsaved_label' => 'Ungespeicherte Seite(n)',
    'no_list_records' => 'Keine Seiten gefunden',
    'new' => 'Neue Seite',
    'invalid_url' => 'Ungültiges URL-Format. Die URL muss mit einem Slash beginnen und darf nur Ziffern, lateinische Zeichen und die folgenden Symbole beinhalten: ._-[]:?|/+*^$',
    'delete_confirm_multiple' => 'Wollen Sie die ausgewählten Seiten wirklich löschen?',
    'delete_confirm_single' => 'Wollen Sie diese Seite wirklich löschen?',
    'no_layout' => '-- Kein Layout --',
    'title' => 'Seitentitel',
    'url' => 'Seiten-URL',
    'file_name' => 'Seiten-Dateiname',
  ],
  'layout' => [
    'not_found_name' => 'Das Layout \':name\' wurde nicht gefunden',
    'menu_label' => 'Layouts',
    'unsaved_label' => 'Ungespeicherte(s) Layout(s)',
    'no_list_records' => 'Keine Layouts gefunden',
    'new' => 'Neues Layout',
    'delete_confirm_multiple' => 'Wollen Sie die ausgewählten Layouts wirklich löschen?',
    'delete_confirm_single' => 'Wollen Sie das ausgewählte Layout wirklich löschen?',
  ],
  'partial' => [
    'not_found_name' => 'Das Partial \':name\' wurde nicht gefunden.',
    'invalid_name' => 'Ungültiger Partial-Name: :name.',
    'menu_label' => 'Partials',
    'unsaved_label' => 'Ungespeicherte(s) Partial(s)',
    'no_list_records' => 'Keine Partials gefunden',
    'delete_confirm_multiple' => 'Wollen Sie die ausgewählten Partials wirklich löschen?',
    'delete_confirm_single' => 'Wollen Sie das ausgewählte Partial wirklich löschen?',
    'new' => 'Neues Partial',
  ],
  'content' => [
    'not_found_name' => 'Die Inhaltsdatei \':name\' wurde nicht gefunden.',
    'menu_label' => 'Inhalt',
    'unsaved_label' => 'Ungespeicherter Inhalt',
    'no_list_records' => 'Keine Inhaltsdateien gefunden',
    'delete_confirm_multiple' => 'Wollen Sie die ausgewählten Inhalte und Verzeichnisse wirklich löschen?',
    'delete_confirm_single' => 'Wollen Sie diese Inhaltsdatei wirklich löschen?',
    'new' => 'Neue Inhaltsdatei',
  ],
  'ajax_handler' => [
    'invalid_name' => 'Ungültiger Name für AJAX Handler: :name.',
    'not_found' => 'AJAX Handler \':name\' wurde nicht gefunden.',
  ],
  'cms' => [
    'menu_label' => 'CMS',
  ],
  'sidebar' => [
    'add' => 'Hinzufügen',
    'search' => 'Suchen...',
  ],
  'editor' => [
    'settings' => 'Einstellungen',
    'title' => 'Titel',
    'new_title' => 'Neuer Seitentitel',
    'url' => 'URL',
    'filename' => 'Dateiname',
    'layout' => 'Layout',
    'description' => 'Beschreibung',
    'preview' => 'Vorschau',
    'meta' => 'Meta',
    'meta_title' => 'Meta Titel',
    'meta_description' => 'Meta Beschreibung',
    'markup' => 'Markup',
    'code' => 'Code',
    'content' => 'Inhalt',
    'hidden' => 'Versteckt',
    'hidden_comment' => 'Versteckte Seiten können nur von eingeloggten Backend-Benutzern genutzt werden.',
    'enter_fullscreen' => 'In den Vollbildmodus wechseln',
    'exit_fullscreen' => 'Vollbildmodus beenden',
    'open_searchbox' => 'Suchfeld öffnen',
    'open_replacebox' => 'Ersetzen-Feld öffnen',
    'commit' => 'Commit',
    'reset' => 'Zurücksetzen',
    'commit_confirm' => 'Sind Sie sicher, dass Sie Ihre Änderungen an dieser Datei auf das Dateisystem übertragen wollen? Dies wird die bestehende Datei auf dem Dateisystem überschreiben',
    'reset_confirm' => 'Sind Sie sicher, dass Sie diese Datei auf die Kopie zurücksetzen wollen, die sich auf dem Dateisystem befindet? Dadurch wird sie vollständig durch die Datei ersetzt, die sich auf dem Dateisystem befindet.',
    'committing' => 'Committing',
    'resetting' => 'Zurücksetzen',
    'commit_success' => 'Der :type wurde auf das Dateisystem übertragen',
    'reset_success' => 'Der :type wurde auf die Dateisystemversion zurückgesetzt',
  ],
  'asset' => [
    'menu_label' => 'Assets',
    'unsaved_label' => 'Ungespeicherte(s) Asset(s)',
    'drop_down_add_title' => 'Hinzufügen...',
    'drop_down_operation_title' => 'Aktion...',
    'upload_files' => 'Datei(en) hochladen',
    'create_file' => 'Datei erstellen',
    'create_directory' => 'Verzeichnis erstellen',
    'directory_popup_title' => 'Neues Verzeichnis',
    'directory_name' => 'Verzeichnisname',
    'rename' => 'Umbenennen',
    'delete' => 'Löschen',
    'move' => 'Verschieben',
    'select' => 'Auswählen',
    'new' => 'Neue Datei',
    'rename_popup_title' => 'Umbenennen',
    'rename_new_name' => 'Neuer Name',
    'invalid_path' => 'Pfade dürfen ausschließlich Ziffern, lateinische Zeichen, Leerzeichen sowie die folgenden Symbole enthalten: ._-/',
    'error_deleting_file' => 'Fehler beim Löschen der Datei :name.',
    'error_deleting_dir_not_empty' => 'Fehler beim Löschen des Verzeichnisses :name, da es nicht leer ist.',
    'error_deleting_dir' => 'Fehler beim Löschen der Datei :name.',
    'invalid_name' => 'Asset-Name darf nur Ziffern, lateinische Zeichen, Leerzeichen sowie die folgenden Symbole enthalten: ._-',
    'original_not_found' => 'Originaldatei oder -verzeichnis wurde nicht gefunden',
    'already_exists' => 'Datei oder Verzeichnis mit diesem Namen existiert bereits',
    'error_renaming' => 'Fehler beim Umbenennen der Datei bzw. des Verzeichnisses',
    'name_cant_be_empty' => 'Es muss ein Name angegeben werden',
    'too_large' => 'Die hochzuladende Datei ist zu groß. Sie dürfen maximal Dateien der Größe :max_size hochladen',
    'type_not_allowed' => 'Es sind ausschließlich folgende Dateiendungen erlaubt: :allowed_types',
    'file_not_valid' => 'Datei ist ungültig',
    'error_uploading_file' => 'Fehler beim Hochladen der Datei ":name": :error',
    'move_please_select' => 'Bitte auswählen',
    'move_destination' => 'Zielverzeichnis',
    'move_popup_title' => 'Assets verschieben',
    'move_button' => 'Verschieben',
    'selected_files_not_found' => 'Ausgewählte Dateien nicht gefunden',
    'select_destination_dir' => 'Bitte wählen Sie ein Zielverzeichnis aus',
    'destination_not_found' => 'Zielverzeichnis wurde nicht gefunden',
    'error_moving_file' => 'Fehler beim Verschieben der Datei :file',
    'error_moving_directory' => 'Fehler beim Verschieben des Verzeichnisses :dir',
    'error_deleting_directory' => 'Fehler beim Löschen des Originalverzeichnisses :dir',
    'no_list_records' => 'Keine Dateien gefunden',
    'delete_confirm' => 'Ausgewählte Dateien oder Verzeichnisse löschen?',
    'path' => 'Pfad',
  ],
  'component' => [
    'menu_label' => 'Komponenten',
    'invalid_request' => 'Aufgrund ungültiger Komponentendaten kann das Template nicht gespeichert werden.',
    'no_records' => 'Keine Komponenten gefunden',
    'not_found' => 'Die Komponente \':name\' wurde nicht gefunden.',
    'no_default_partial' => 'Diese Komponente hat keinen \'default\' Partial',
    'method_not_found' => 'Die Komponente \':name\' enthält keine Methode mit Namen \':method\'.',
    'soft_component_description' => 'Diese Komponente fehlt, aber Sie ist optional.',
  ],
  'template' => [
    'invalid_type' => 'Unbekannter Template-Typ.',
    'not_found' => 'Das angeforderte Template wurde nicht gefunden.',
    'saved' => 'Das Template wurde erfolgreich gespeichert.',
    'no_list_records' => 'Keine Einträge gefunden',
    'delete_confirm' => 'Ausgewählte Templates löschen?',
    'order_by' => 'Sortieren nach',
  ],
  'permissions' => [
    'name' => 'Cms',
    'manage_content' => 'Inhalt verwalten',
    'manage_assets' => 'Assets verwalten',
    'manage_pages' => 'Seiten verwalten',
    'manage_layouts' => 'Layouts verwalten',
    'manage_partials' => 'Partials verwalten',
    'manage_themes' => 'Themes verwalten',
    'manage_theme_options' => 'Konfigurieren Sie Anpassungsoptionen für das aktive Theme',
  ],
  'theme_log' => [
    'hint' => 'Dieses Protokoll zeigt alle Änderungen an, die von Administratoren im Back-End-Bereich am Theme vorgenommen wurden.',
    'menu_label' => 'Theme Protokoll',
    'menu_description' => 'Zeigen Sie die am aktiven Theme vorgenommenen Änderungen an.',
    'empty_link' => 'Leeres Theme Protokoll',
    'empty_loading' => 'Leeren des Theme Protokolls...',
    'empty_success' => 'Theme Protokoll',
    'return_link' => 'Zurück zum Theme Protokoll',
    'id' => 'ID',
    'id_label' => 'Protokoll ID',
    'created_at' => 'Datum & Zeit',
    'user' => 'Benutzer',
    'type' => 'Typ',
    'type_create' => 'Erstellen',
    'type_update' => 'Aktualisieren',
    'type_delete' => 'Löschen',
    'theme_name' => 'Theme',
    'theme_code' => 'Theme Code',
    'old_template' => 'Template (Alt)',
    'new_template' => 'Template (Neu)',
    'template' => 'Template',
    'diff' => 'Änderungen',
    'old_value' => 'Alter Wert',
    'new_value' => 'Neuer Wert',
    'preview_title' => 'Templateänderungen',
    'template_updated' => 'Template wurde aktualisiert',
    'template_created' => 'Template wurde erstellt',
    'template_deleted' => 'Template wurde gelöscht',
  ],
];
