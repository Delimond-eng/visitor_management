try {
    new simpleDatatables.DataTable("#datatable_1", {
        searchable: !0,
        fixedHeight: !1,
    });
} catch (e) {}
try {
    const b = new simpleDatatables.DataTable("#datatable_2");
    document.querySelector("button.csv").addEventListener("click", () => {
        b.export({
            type: "csv",
            download: !0,
            lineDelimiter: "\n\n",
            columnDelimiter: ";",
        });
    }),
        document.querySelector("button.sql").addEventListener("click", () => {
            b.export({ type: "sql", download: !0, tableName: "export_table" });
        }),
        document.querySelector("button.txt").addEventListener("click", () => {
            b.export({ type: "txt", download: !0 });
        }),
        document.querySelector("button.json").addEventListener("click", () => {
            console.log(b),
                b.export({
                    type: "json",
                    download: !0,
                    escapeHTML: !0,
                    space: 3,
                });
        });
} catch (e) {}
try {
    document.addEventListener("DOMContentLoaded", function () {
        var c = document.querySelector("[name='select-all']"),
            n = document.querySelectorAll("[name='check']"),
            e =
                (c?.addEventListener("change", function () {
                    var t = c.checked;
                    n.forEach(function (e) {
                        e.checked = t;
                    });
                }),
                n.forEach(function (e) {
                    e.addEventListener("click", function () {
                        var e = n.length,
                            t = document.querySelectorAll(
                                "[name='check']:checked"
                            ).length;
                        t <= 0
                            ? ((c.checked = !1), (c.indeterminate = !1))
                            : e === t
                            ? ((c.checked = !0), (c.indeterminate = !1))
                            : ((c.checked = !0), (c.indeterminate = !0));
                    });
                }),
                document.querySelectorAll("table > thead > tr > th"));
        0 < e.length &&
            (e = e[0].querySelector("button:first-child")) &&
            e.classList.remove("dataTable-sorter"),
            document
                .querySelector(".checkbox-all thead tr th:first-child a")
                ?.classList.remove("dataTable-sorter");
    });
} catch (e) {
    console.error(e);
}
