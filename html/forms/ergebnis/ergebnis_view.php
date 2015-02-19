<div data-role="page" id="ergebnis_view">
  <div data-role="header" data-position="fixed">
    <a href="#ergebnis_menue" data-role="button" data-icon="home">Zur&uuml;ck</a>
    <h1 data-bind="text: ergebnis().titel"></h1>
  </div><!-- /header -->
  <div data-role="content">
    <div id="monat_selection_view" data-bind="visible: ergebnis().monat_selection_visible">
      <select data-bind="value: ergebnis().selected_monat, options: ergebnis().monate,
                         optionsText: 'monat', optionsValue: 'monat', event:{'change': ergebnis().onchange}">
      </select>
    </div>
    <div id="jahr_selection_view" data-bind="visible: ergebnis().jahr_selection_visible">
      <select data-bind="value: ergebnis().selected_jahr, options: ergebnis().jahre,
                         optionsText: 'jahr', optionsValue: 'jahr', event:{'change': ergebnis().onchange}">
      </select>
    </div>
    <b data-bind="text: ergebnis().untertitel"></b>
    <table data-bind="foreach: ergebnis().rechnung">
      <tr>
        <td data-bind="text: kontonummer"></td>
        <td>&nbsp;&nbsp;</td>
        <td data-bind="text: bezeichnung"></td>
        <td>&nbsp;&nbsp;</td>
        <td data-bind="text: betrag" class="td_betrag"></td>
      </tr>
    </table><br/>
    <table data-bind="foreach: ergebnis().summen">
      <tr>
        <td data-bind="text: label"></td>
        <td>&nbsp;&nbsp;</td>
        <td data-bind="text: betrag" class="td_betrag"></td>
      </tr>
    </table>
  </div><!-- /content -->
  <div data-role="footer" data-position="fixed">
    <h4>&copy; 2013-2015 by Wolfgang Wiedermann</h4>
  </div><!-- /footer --> 
</div><!-- /page -->
