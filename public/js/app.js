/* global instantsearch algoliasearch */

const search = instantsearch({
    indexName: "dev_MUSIC",
    searchClient: algoliasearch(
        "NIKSDQP3SY",
        "6cda53fd9043a7c7c1450b9348eedae4"
    ),
});

search.addWidgets([
    instantsearch.widgets.menu({
        container: "#type-list",
        attribute: "type",
        defaultRefinement: "genre",
        transformItems(items) {
            const sortedItems = items.sort(function (a, b) {
                const sortOrderA = a.label.split("_");
                const sortOrderB = b.label.split("_");
                const label = sortOrderA[1] - sortOrderB[1];
                return label;
            });
            return sortedItems.map((item) => ({
                ...item,
                label: item.label.split("_")[0],
            }));
        },
        templates: {
            item: `
            <a href="{{url}}">
              <div class="{{label}}-G2B5sx valign-text-middle ourstorybeginsfree-regular-normal-eerie-black-30px"><span class="menu-item">{{label}}</span></div>
            </a>
          `,
        },
    }),

    // instantsearch.widgets.hits({
    //     container: "#hits",
    //     templates: {
    //         item: `
    //       <div>W
    //         <div class="hit-name">
    //           {{#helpers.highlight}}{ "attribute": "title" }{{/helpers.highlight}}
    //         </div>
    //         <div class="hit-description">
    //           {{#helpers.highlight}}{ "attribute": "path" }{{/helpers.highlight}}
    //         </div>
    //       </div>
    //     `,
    //     },
    // }),
]);

search.start();
