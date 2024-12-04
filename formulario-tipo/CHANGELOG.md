# Changelog

## [1.3.4] - 2024-11-28
## Changed
- Ajustes en listados "ul" y "ol"

## [1.3.3] - 2024-10-25
## Changed
- Corrección de textos y presentnación
- Ajuste para no mostrar más de una acción principal en tablas
- Ejemplo con grilla y explicación para formularios apilados

## [1.3.2] - 2024-08-21
## Added
- Ayudas contexturales para el uso de componentes
- Formatos permimitidos en input file

## [1.3.1] - 2024-01-25

## Added
- Se incopora la clase de css "Form-item-aligned" para emular el comportamiento de un hint para los divs que contengan esa clase.
- Se incorpora información comentada sobre la versión en el archivo inc/head.php.

## Changed
- Se realizaron ajustes de css relacionados con la eliminación del display table
- Se corrigieron errores en algunas alertas


## [1.3] - 2024-01-17

## Changed
- Se elimina display table para evitar problemas con lectores de pantalla. Se pasa todo a flex
- Ajustes varios y agregado de moléculas de input con error.

## [1.2] - 2024-01-03

## Changed
- Corrección de alineación de campos con alertas.
- Corrección del foco los elementos: file, checkbox y radio-button.
- Ajuste de legends de los fieldsets en la versión responsive.
- Ajuste de hover en los días disponibles del calendario.
- Ajuste de estilos para replicar Portal Base en botones, cuadros de diálogo, notificaciones y foco general
- Se agregan enlaces en los íconos de acción en la tabla "Tabla con elementos de formulário"

## Added
- Se incorpora el class Form--tipo a todos los formularios (elemento form).
- A la molécula "Pasos" se le incorpora un div con el class "Steps--tipo" que encapsula todas etiquetas que lo conforman la molécula.
- En la molécula "Tablas" se le incorpora a la etiqueta "Table" un class con el nombre "Table--tipo.
- En la molécula "Paginación" se sustituye el class "Pagination" por "Pagination--tipo".
- En la molécula "Pestañas" se incorpora un div con el class "Tabs-wrapper--tipo" encapsulado los divs con los class "Tabs" y "Tabs-content".
- En las moléculas "Cuadros de diálogo" y "Notificaciones" se sutituye el class "Alert" por "Alert--tipo".
- Se incorpora la molécula "Cuadro de díalogo con listado" a la página "Moléculas".
- Se incorpora una variante a la molécula "Tablas" llamada "Tabla con elementos de formulario".
- Se establece un márgen común a los fieldsets y alertas pera eliminar la dependencia previa de las utilities.