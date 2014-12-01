$(function() {
    function log( message ) {
      $( "<div>" ).text( message ).prependTo( "#log" );
      $( "#log" ).scrollTop( 0 );
    }
 
    $( "#cardname" ).autocomplete({
      source: function( request, response ) {
        $.ajax({
          url: "https://api.deckbrew.com/mtg/cards/typeahead/",
          dataType: "json",
          data: {
            q: request.term
          },
          success: function( data ) {

            response( $.map(data, function(item) {
                return {
                    "label" : item.name
                };
            }));
          },
          error: function() {
            console.log("json typehead error");
          }
        });
      },
      minLength: 3,
      select: function( event, ui, data ) {
        cardname = ui.item.label;
        jsonUrl = "https://api.deckbrew.com/mtg/cards/?name=" + cardname;
        $.getJSON(jsonUrl,function(json){
            selectedCard = json;
        });
        log( ui.item ?
          "Selected: " + ui.item.label :
          "Nothing selected, input was " + this.value);
        },
      open: function() {
        $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
      },
      close: function() {
        $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
      }
    });
  });