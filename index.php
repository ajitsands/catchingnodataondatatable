// Function to check if DataTable is empty
        function isDataTableEmpty(tableId) {
            // Check if DataTable is initialized
            if ($.fn.DataTable.isDataTable(tableId)) {
                // DataTable is initialized
                var table = $(tableId).DataTable();
                
                // Check if DataTable contains any rows
                return table.rows().count() === 0;
            } else {
                // DataTable is not initialized or not found
                return true; // Treat as empty
            }
        }
		
		
		
	 "initComplete": function(settings, json) {	
		 if (isDataTableEmpty('#tlbTransaction')) {
                                // DataTable is empty
                                console.log('DataTable is empty.');
                                
                        } 
	});
	
	
	// On Ajax Post 
	
	'dataSrc': function(response) {
                            if (response.data && response.data.length > 0) {
                                return response.data; // Return the data array if it's not empty
                            } else {
                                return []; // Return an empty array if no data is available
                            }
                        }
                }
				
				


 language: {
        //info: "Displaying _START_ to _END_ of _TOTAL_ entries"
		info: "Total _TOTAL_ entries (Click to change Type and Status)",
		zeroRecords: "No Payment Shedules Available"
      },
