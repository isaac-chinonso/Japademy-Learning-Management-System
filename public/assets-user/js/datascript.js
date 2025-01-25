const ready = (fn) => {
  if (document.readyState !== "loading") {
    fn();
  } else {
    document.addEventListener("DOMContentLoaded", fn);
  }
};

ready(() => {
  let table = new DataTable("#index", {
    language: {
      // url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/ru.json"
    },

    ajax:
      "https://api.allorigins.win/raw?url=https://gitlab.com/Ethicist/fileshare/-/raw/master/data.json",

    dom:
      "<'row'<'col-sm-12 col-md-6 mb-3'l><'col-sm-12 col-md-6 mb-3'f>>" +
      "<'row'<'col-sm-12'tr>>" +
      "<'row '<'col-sm-12 col-md-5 mt-3'B><'col-sm-12 col-md-7 mt-3'p>>",
    paging: true,
    autoWidth: true,
    buttons: ["copyHtml5", "csvHtml5", "excelHtml5", "pdfHtml5"],
    responsive: true,
    destroy: true,
    deferRender: true,

    /* responsive */
    responsive: {
      details: {
        display: $.fn.dataTable.Responsive.display.modal({
          header: (row) => {
            let data = row.data();
            return data[0];
          }
        }),
        renderer: (api, rowIdx, columns) => {
          let data = $.map(columns, (col, i) => {
            return col.hidden
              ? col.data
                ? `
<tr class="d-flex flex-column mb-3"
  data-dt-row="${col.rowIndex}"
  data-dt-column="${col.columnIndex}">
  <td class="d-flex w-100">
    <strong>${col.title}:</strong>
  </td>
  <td class="d-flex w-100">
    ${col.data}
  </td>
</tr>
`
                : ""
              : "";
          }).join("");

          return data ? $('<table class="w-100"/>').append(data) : false;
        }
      }
    },
    /* end responsive */

    /* columnDefs */
    columnDefs: [
      {
        targets: 0,
        render: function (data, type, row, meta) {
          if (type === "display") {
            return (
              '<i class="fa fa-external-link" aria-hidden="true"></i>' +
              $("<a>")
                .attr("href", data)
                .attr("target", "_blank")
                .text(data)
                .wrap("<div></div>")
                .parent()
                .html()
            );
          } else {
            return data;
          }
        }
      },
      {
        targets: 1,
        render: function (data, type, row, meta) {
          if (data === "OK" || data === "Up again") {
            return $("<span>")
              .attr("class", "green")
              .text(data)
              .wrap("<div></div>")
              .parent()
              .html();
          } else {
            return $("<span>")
              .attr("class", "red")
              .text(data)
              .wrap("<div></div>")
              .parent()
              .html();
          }
        }
      }
    ]
    /* end columnDefs */
  });
});