function setSelect2(selectObj) {
  $(selectObj.id).select2({
      placeholder: selectObj.placeholder,
      allowClear: false
  })
}

function addParsleyRequired() {
  setTimeout(function(){
      document.getElementById('g-recaptcha-response').setAttribute('data-parsley-required', 'true')
  }, 300)
}

function enableSelect2Field(field) {
  field.next('.select2-container')
      .find('.select2-selection')
      .prop('style','');
}

function disableSelect2Field(field) {
  field.next('.select2-container')
      .find('.select2-selection')
      .prop('style','background-color: #eee;pointer-events:none;touch-action: none;');
}

function select2Parent(parentList, parentId, childSel, childField, childLabel) {
  var childArr = parentList.find(function (_parent) {
      return _parent.id == parentId;
  })[childField] ?? [];
  
  childSel
      .removeAttr('data-parsley-required')
      .empty().trigger("change")
      .select2({
          data: [{}]
      })
      .select2({
          data: childArr,
          placeholder: childLabel
      })
      .prop('disabled',false);
  
  enableSelect2Field(childSel);
  
  // if(childArr.length) {
  //     childSel.attr('data-parsley-required', 'true');
  // }
  
  if(!childArr.length) {
      disableSelect2Field(childSel);
  } else {
      childSel.attr('data-parsley-required', 'true').prop('disabled',false);
      enableSelect2Field(childSel);
  }
  
  return childArr;
}

function industryBlock() {
  var industries = [
      {
          id: 'Bank & Financial Institution',
          text: 'Bank & Financial Institution',
          subindustries: [
              { id: 'Credit Card', text: 'Credit Card' },
              { id: 'Fin/Lending/Leasing', text: 'Fin/Lending/Leasing' },
              { id: 'Foreign', text: 'Foreign' },
              { id: 'Ins Agents & Carriers', text: 'Ins Agents & Carriers' },
              { id: 'Insurance', text: 'Insurance' },
              { id: 'Investment/Securities', text: 'Investment/Securities' },
              { id: 'Local Banks', text: 'Local Banks' },
			  { id: 'Fintech', text: 'Fintech' }
          ]
      },
      {
          id: 'Business & Prof Svcs',
          text: 'Business & Prof Svcs',
          subindustries: [
              { id: 'Amusement & Recreation Svcs', text: 'Amusement & Recreation Svcs' },
              { id: 'Auditing Firms', text: 'Auditing Firms' },
              { id: 'Auto Repair, Svcs & Parking', text: 'Auto Repair, Svcs & Parking' },
              { id: 'Business Services', text: 'Business Services' },
              { id: 'Computer Leasing/Rentals', text: 'Computer Leasing/Rentals' },
              { id: 'Construction', text: 'Construction' },
              { id: 'Distribution', text: 'Distribution' },
              { id: 'Educational Services', text: 'Educational Services' },
              { id: 'Health Services', text: 'Health Services' },
              { id: 'Law Firms', text: 'Law Firms' },
              { id: 'Manpower Services', text: 'Manpower Services' },
              { id: 'Membership Organizations', text: 'Membership Organizations' },
              { id: 'Personal', text: 'Personal' },
              { id: 'Professional', text: 'Professional' },
              { id: 'Research', text: 'Research' },
              { id: 'Social Services', text: 'Social Services' }
          ]
      },
      {
          id: 'Education',
          text: 'Education',
          subindustries: [
              { id: 'Colleges', text: 'Colleges' },
              { id: 'Primary & Secondary', text: 'Primary & Secondary' },
              { id: 'Universities', text: 'Universities' }
          ]
      },
      {
          id: 'Farm Support Svcs',
          text: 'Farm Support Svcs',
          subindustries: [
              { id: 'Agricultural Production Crops', text: 'Agricultural Production Crops' },
              { id: 'Agricultural Services', text: 'Agricultural Services' },
              { id: 'Fishing', text: 'Fishing' },
              { id: 'Livestock Prod/Animal Spclty', text: 'Livestock Prod/Animal Spclty' }
        ]
      },
      {
          id: 'Government',
          text: 'Government',
          subindustries: [
              { id: 'Govt Owned & Controlled Corp', text: 'Govt Owned & Controlled Corp' },
              { id: 'Local Government Units', text: 'Local Government Units' },
              { id: 'National', text: 'National' },
              { id: 'OP/VIP/Embassies/Intl Org', text: 'OP/VIP/Embassies/Intl Org' },
              { id: 'Others', text: 'Others' }
        ]
      },
      {
          id: 'Health Care Sector',
          text: 'Health Care Sector',
          subindustries: [
              { id: 'Health Maintenance', text: 'Health Maintenance' },
              { id: 'Hospitals', text: 'Hospitals' },
              { id: 'Clinics', text: 'Clinics' },
              { id: 'Pharma/Manufacturer/Distr', text: 'Pharma/Manufacturer/Distr' }
        ]
      },
      {
          id: 'IT Applications & Svcs',
          text: 'IT Applications & Svcs',
          subindustries: [
              { id: 'Content Delivery Network', text: 'Content Delivery Network' },
              { id: 'e-Commerce', text: 'e-Commerce' },
              { id: 'Online Gambling', text: 'Online Gambling' },
              { id: 'Online Gaming', text: 'Online Gaming' },
              { id: 'Over the Top', text: 'Over the Top' },
              { id: 'System Integrators/Vendors', text: 'System Integrators/Vendors' },
			  { id: 'Cloud Service Provider', text: 'Cloud Service Provider' },
			  { id: 'Internet Content Provider', text: 'Internet Content Provider' },
			  { id: 'Network Service Provider', text: 'Network Service Provider' },
			  { id: 'Data Center Operator', text: 'Data Center Operator' },
        ]
      },
      {
          id: 'Manufacturing',
          text: 'Manufacturing',
          subindustries: [
              { id: 'Apparel/Fabric & Similar Matls', text: 'Apparel/Fabric & Similar Matls' },
              { id: 'Chemicals And Allied Products', text: 'Chemicals And Allied Products' },
              { id: 'Electronic, Elec Equipt & Comp', text: 'Electronic, Elec Equipt & Comp' },
              { id: 'Fabricated Metals/Transpo Eqpt', text: 'Fabricated Metals/Transpo Eqpt' },
              { id: 'Food & Beverage', text: 'Food & Beverage' },
              { id: 'Furnitures & Fixtures', text: 'Furnitures & Fixtures' },
              { id: 'Industrial/Commercial Machy', text: 'Industrial/Commercial Machy' },
              { id: 'Leather & Leather Products', text: 'Leather & Leather Products' },
              { id: 'Lumber & Wood Products', text: 'Lumber & Wood Products' },
              { id: 'Measure/Analyzing/Control Eqpt', text: 'Measure/Analyzing/Control Eqpt' },
              { id: 'Medical/Optical Goods', text: 'Medical/Optical Goods' },
              { id: 'Miscellaneous Mfg Industries', text: 'Miscellaneous Mfg Industries' },
              { id: 'Paper & Allied Products', text: 'Paper & Allied Products' },
              { id: 'Petrol Refining & Related Ind', text: 'Petrol Refining & Related Ind' },
              { id: 'Print, Publishing & Allied Ind', text: 'Print, Publishing & Allied Ind' },
              { id: 'Rubber & Misc Plastic Product', text: 'Rubber & Misc Plastic Product' },
              { id: 'Semicon', text: 'Semicon' },
              { id: 'Stone, Clay, Glass, Concrete', text: 'Stone, Clay, Glass, Concrete' },
              { id: 'Textile Mill Products', text: 'Textile Mill Products' },
              { id: 'Tobacco Products', text: 'Tobacco Products' }
        ]
      },
      {
          id: 'Media',
          text: 'Media',
          subindustries: [
              { id: 'Cable', text: 'Cable' },
              { id: 'Publications', text: 'Publications' },
              { id: 'Radio & Television', text: 'Radio & Television' }
        ]
      },
      {
          id: 'Mining',
          text: 'Mining',
          subindustries: [
              { id: 'Coal/Metals/Quarrying', text: 'Coal/Metals/Quarrying' },
              { id: 'Oil And Gas Extraction', text: 'Oil And Gas Extraction' }
        ]
      },
      {
          id: 'Non-Profit Institutions',
          text: 'Non-Profit Institutions',
          subindustries: [
              { id: 'Non-Profit Organizations', text: 'Non-Profit Organizations' },
              { id: 'Religious Organizations', text: 'Religious Organizations' }
        ]
      },
      {
          id: 'Offshoring & Outsourcing',
          text: 'Offshoring & Outsourcing',
          subindustries: [
              { id: 'Animation', text: 'Animation' },
              { id: 'BPO', text: 'BPO' },
              { id: 'Call Center', text: 'Call Center' },
              { id: 'Healthcare', text: 'Healthcare' },
              { id: 'Information Technology', text: 'Information Technology' },
              { id: 'Shared Services', text: 'Shared Services' }
        ]
      },
      {
          id: 'Real Estate',
          text: 'Real Estate',
          subindustries: [
              { id: 'Horizontal Development', text: 'Horizontal Development' },
              { id: 'Vertical Development', text: 'Vertical Development' }
        ]
      },
      {
          id: 'Retail Sector',
          text: 'Retail Sector',
          subindustries: [
              { id: 'Apparel & Accessories Stores', text: 'Apparel & Accessories Stores' },
              { id: 'Auto Dealer & Gas Station', text: 'Auto Dealer & Gas Station' },
              { id: 'Bldg Matls, HW, Garden Supply', text: 'Bldg Matls, HW, Garden Supply' },
              { id: 'Food Retail Outlets', text: 'Food Retail Outlets' },
              { id: 'Furniture, Furnishing, Eqpt', text: 'Furniture, Furnishing, Eqpt' },
              { id: 'General Merchandise Stores', text: 'General Merchandise Stores' },
              { id: 'Misc Retail Industries', text: 'Misc Retail Industries' }
        ]
      },
      {
          id: 'Transportation & Logistics',
          text: 'Transportation & Logistics',
          subindustries: [
              { id: 'Air', text: 'Air' },
              { id: 'Freight/Warehousing', text: 'Freight/Warehousing' },
              { id: 'Land', text: 'Land' },
              { id: 'Public Utility Vehicles', text: 'Public Utility Vehicles' },
              { id: 'Sea', text: 'Sea' }
        ]
      },
      {
          id: 'Travel & Tourism',
          text: 'Travel & Tourism',
          subindustries: [
              { id: 'Gaming/Casino', text: 'Gaming/Casino' },
              { id: 'Hotels/Resorts', text: 'Hotels/Resorts' },
              { id: 'Travel Agencies', text: 'Travel Agencies' }
        ]
      },
      {
          id: 'Utilities',
          text: 'Utilities',
          subindustries: [
              { id: 'Gas & Oil', text: 'Gas & Oil' },
              { id: 'Power', text: 'Power' },
              { id: 'Telco', text: 'Telco' },
              { id: 'Water', text: 'Water' }
        ]
      }
  ];
  
  $('#industry').on('select2:select', function (e) {
      select2Parent(industries, e.params.data.id, $("#00N2x000006cD07"), 'subindustries', 'Sub-Industry');
  });

  $("#industry").select2({
    data: industries
  });
  
  $("#00N2x000006cD07").prop("disabled", true);
  // disableSelect2Field($("#00N2x000006cD07"));
}

function countryBlock() {
  var countries = [
      {
          id: 'AU',
          text: 'Australia',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'IN',
          text: 'India',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'CN',
          text: 'China',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'HK',
          text: 'Hong Kong',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'KR',
          text: 'Republic of Korea',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'SG',
          text: 'Singapore',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'JP',
          text: 'Japan',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'Philippines',
          text: 'Philippines',
          region: [
              { 
                  id: 'ABRA', 
                  text: 'ABRA'
              },
              {
                  id: 'AGUSAN DEL NORTE', 
                  text: 'AGUSAN DEL NORTE'                
              },
              {
                  id: 'AGUSAN DEL SUR', 
                  text: 'AGUSAN DEL SUR'                
              },
              {
                  id: 'AKLAN', 
                  text: 'AKLAN'                
              },
              {
                  id: 'ALBAY', 
                  text: 'ALBAY'                
              },
              {
                  id: 'ANTIQUE', 
                  text: 'ANTIQUE'                
              },
              {
                  id: 'APAYAO', 
                  text: 'APAYAO'                
              },
              {
                  id: 'AURORA', 
                  text: 'AURORA'                
              },
              {
                  id: 'BATAAN', 
                  text: 'BATAAN'                
              },
              {
                  id: 'BASILAN', 
                  text: 'BASILAN'                
              },
              {
                  id: 'BENGUET', 
                  text: 'BENGUET'                
              },
              {
                  id: 'BILIRAN', 
                  text: 'BILIRAN'                
              },
              {
                  id: 'BOHOL', 
                  text: 'BOHOL'                
              },
              {
                  id: 'BATANGAS', 
                  text: 'BATANGAS'                
              },
              {
                  id: 'BATANES', 
                  text: 'BATANES'                
              },
              {
                  id: 'BUKIDNON', 
                  text: 'BUKIDNON'                
              },
              {
                  id: 'BULACAN', 
                  text: 'BULACAN'                
              },
              {
                  id: 'CAGAYAN', 
                  text: 'CAGAYAN'                
              },
              {
                  id: 'CAMIGUIN', 
                  text: 'CAMIGUIN'                
              },
              {
                  id: 'CAMARINES NORTE', 
                  text: 'CAMARINES NORTE'                
              },
              {
                  id: 'CAPIZ', 
                  text: 'CAPIZ'                
              },
              {
                  id: 'CAMARINES SUR', 
                  text: 'CAMARINES SUR'                
              },
              {
                  id: 'CATANDUANES', 
                  text: 'CATANDUANES'                
              },
              {
                  id: 'CAVITE', 
                  text: 'CAVITE'                
              },
              {
                  id: 'CEBU', 
                  text: 'CEBU'                
              },
              {
                  id: 'COMPOSTELA VALLEY', 
                  text: 'COMPOSTELA VALLEY'                
              },
              {
                  id: 'DAVAO ORIENTAL', 
                  text: 'DAVAO ORIENTAL'                
              },
              {
                  id: 'DAVAO DEL SUR', 
                  text: 'DAVAO DEL SUR'                
              },
              {
                  id: 'DAVAO DEL NORTE', 
                  text: 'DAVAO DEL NORTE'                
              },
              {
                  id: 'DINAGAT ISLANDS', 
                  text: 'DINAGAT ISLANDS'                
              },
              {
                  id: 'EASTERN SAMAR', 
                  text: 'EASTERN SAMAR'                
              },
              {
                  id: 'GUIMARAS', 
                  text: 'GUIMARAS'                
              },
              {
                  id: 'IFUGAO', 
                  text: 'IFUGAO'                
              },
              {
                  id: 'ILOILO', 
                  text: 'ILOILO'                
              },
              {
                  id: 'ILOCOS NORTE', 
                  text: 'ILOCOS NORTE'                
              },
              {
                  id: 'ILOCOS SUR', 
                  text: 'ILOCOS SUR'                
              },
              {
                  id: 'ISABELA', 
                  text: 'ISABELA'                
              },
              {
                  id: 'KALINGA', 
                  text: 'KALINGA'                
              },
              {
                  id: 'LAGUNA', 
                  text: 'LAGUNA'                
              },
              {
                  id: 'LANAO DEL NORTE', 
                  text: 'LANAO DEL NORTE'                
              },
              {
                  id: 'LANAO DEL SUR', 
                  text: 'LANAO DEL SUR'                
              },
              {
                  id: 'LEYTE', 
                  text: 'LEYTE'                
              },
              {
                  id: 'LA UNION', 
                  text: 'LA UNION'                
              },
              {
                  id: 'MARINDUQUE', 
                  text: 'MARINDUQUE'                
              },
              {
                  id: 'MAGUINDANAO', 
                  text: 'MAGUINDANAO'                
              },
              {
                  id: 'METRO MANILA', 
                  text: 'METRO MANILA'                
              },
              {
                  id: 'MASBATE', 
                  text: 'MASBATE'                
              },
              {
                  id: 'OCCIDENTAL MINDORO', 
                  text: 'OCCIDENTAL MINDORO'                
              },
              {
                  id: 'ORIENTAL MINDORO', 
                  text: 'ORIENTAL MINDORO'                
              },
              {
                  id: 'MOUNTAIN PROVINCE', 
                  text: 'MOUNTAIN PROVINCE'                
              },
              {
                  id: 'MISAMIS OCCIDENTAL', 
                  text: 'MISAMIS OCCIDENTAL'                
              },
              {
                  id: 'MISAMIS ORIENTAL', 
                  text: 'MISAMIS ORIENTAL'                
              },
              {
                  id: 'NORTH COTABATO', 
                  text: 'NORTH COTABATO'                
              },
              {
                  id: 'NEGROS OCCIDENTAL', 
                  text: 'NEGROS OCCIDENTAL'                
              },
              {
                  id: 'NEGROS ORIENTAL', 
                  text: 'NEGROS ORIENTAL'                
              },
              {
                  id: 'NORTHERN SAMAR', 
                  text: 'NORTHERN SAMAR'                
              },
              {
                  id: 'NUEVA ECIJA', 
                  text: 'NUEVA ECIJA'                
              },
              {
                  id: 'NUEVA VIZCAYA', 
                  text: 'NUEVA VIZCAYA'                
              },
              {
                  id: 'PAMPANGA', 
                  text: 'PAMPANGA'                
              },
              {
                  id: 'PANGASINAN', 
                  text: 'PANGASINAN'                
              },
              {
                  id: 'DAVAO DE ORO', 
                  text: 'DAVAO DE ORO'                
              },
              {
                  id: 'PALAWAN', 
                  text: 'PALAWAN'                
              },
              {
                  id: 'QUEZON', 
                  text: 'QUEZON'                
              },
              {
                  id: 'QUIRINO', 
                  text: 'QUIRINO'                
              },
              {
                  id: 'RIZAL', 
                  text: 'RIZAL'                
              },
              {
                  id: 'ROMBLON', 
                  text: 'ROMBLON'                
              },
              {
                  id: 'SARANGANI', 
                  text: 'SARANGANI'                
              },
              {
                  id: 'SOUTH COTABATO', 
                  text: 'SOUTH COTABATO'                
              },
              {
                  id: 'SIQUIJOR', 
                  text: 'SIQUIJOR'                
              },
              {
                  id: 'SOUTHERN LEYTE', 
                  text: 'SOUTHERN LEYTE'                
              },
              {
                  id: 'SULU', 
                  text: 'SULU'                
              },
              {
                  id: 'SORSOGON', 
                  text: 'SORSOGON'                
              },
              {
                  id: 'SULTAN KUDARAT', 
                  text: 'SULTAN KUDARAT'                
              },
              {
                  id: 'SURIGAO DEL NORTE', 
                  text: 'SURIGAO DEL NORTE'                
              },
              {
                  id: 'SURIGAO DEL SUR', 
                  text: 'SURIGAO DEL SUR'                
              },
              {
                  id: 'TARLAC', 
                  text: 'TARLAC'                
              },
              {
                  id: 'TAWI-TAWI', 
                  text: 'TAWI-TAWI'                
              },
              {
                  id: 'WESTERN SAMAR', 
                  text: 'WESTERN SAMAR'                
              },
              {
                  id: 'ZAMBOANGA DEL NORTE', 
                  text: 'ZAMBOANGA DEL NORTE'                
              },
              {
                  id: 'ZAMBOANGA DEL SUR', 
                  text: 'ZAMBOANGA DEL SUR'                
              },
              {
                  id: 'ZAMBALES', 
                  text: 'ZAMBALES'                
              },
              {
                  id: 'ZAMBOANGA SIBUGAY', 
                  text: 'ZAMBOANGA SIBUGAY'                
              }
          ]            
      },
      {
          id: 'NO',
          text: 'Norway',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      
      {
          id: 'CZ',
          text: 'Czech Republic',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      {
          id: 'US',
          text: 'United States',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      },
      /*{
          id: 'Others',
          text: 'Others',
    region: [
              { 
                  id: 'Others', 
                  text: 'Others'
              }
    ]
      }*/
  ];
  
  var regions = [];
  
  $('#country').on('select2:select', function (e) {
      regions = select2Parent(countries, $(this).select2('data')[0].id, $("#state"), 'region', 'Region');
      
      setTimeout(function() {
          if($('#country').select2('data')[0].text !== 'Philippines') {
              $('#state')
                  .val("Others")
                  .trigger("select2:select")
                  .trigger("change");
          }
      }, 1);
      
  });
  
  
  $("#country").select2({
    data: countries
  });    
  
  // Preselect Philippines, NCR and Manila
  $('#country')
      .val("Philippines")
      .trigger("select2:select");
  $('#state')
      .val("PHMAM")
      .trigger("select2:select")
      .trigger("change");
}


function changeMobileNum(countryCode, mobileNum) {
  $('#mobile').val(`${countryCode} ${mobileNum}`);
}

$(".button-toggle-modal").on('click',function(){
  console.log('Modal clicked.');
  
  setSelect2({
      id: "#industry",
      placeholder: "Select Industry"
  })
  
  setSelect2({
      id: "#00N2x000006cD07",
      placeholder: "Select Sub-Industry"
  })
  
  setSelect2({
      id: "#00N2x000006cCzj",
      placeholder: "Select Business Type"
  })
  
  setSelect2({
      id: "#00N2x000006cCzl",
      placeholder: "Select Company Size"
  })
  
});

$('#modal_inquiry-form').on('hidden.bs.modal', function (e) {
if( $('body').hasClass('active') ) {
    $('body').removeClass('active')
}
})
  
$( document ).ready(function() {
  $('.inquiry-form select').each(function(i){
      if($(this).data('placeholder')) {
          $(this).select2({
              allowClear: false,
              placeholder: $(this).data('placeholder')
          })
      }
  })
  
  addParsleyRequired()
  
  $('#countrys').on('change', function() {
      var countryCode = $(this).find('option:selected').text();
      var mobileNum = $('#mobile_num').val();
      if(mobileNum.trim() === "") {
          countryCode = '';
      }
      changeMobileNum(countryCode, mobileNum);
  });
  
  $('#mobile_num').on('change', function() {
      var countryCode = $('#countrys').find('option:selected').text();
      var mobileNum = $(this).val();
      // if no selected country code, clear mobile hidden field
      if(countryCode.trim() === "") {
          mobileNum = '';
      }
      if(mobileNum.trim() === "") {
          countryCode = '';
      }
      changeMobileNum(countryCode, mobileNum);
  });
  
  $('#inquiry-form').parsley().on('form:validate', function (formInstance) {
      $('#mobile_num').on('blur', function() {
          $('#mobile').parsley().validate()
      })
      
      $('#countrys').on('change', function() {
          $('#mobile').parsley().validate()
      })
  });
  
  $("#inquiry-form").parsley({
      excluded: 'input[type=button], input[type=submit], input[type=reset]',
      inputs: 'input, textarea, select, input[type=hidden], :hidden#mobile',
  });
  
  //countryCodeBlock()

  industryBlock()

  countryBlock()
  
  setSelect2({
      id: "#countrys",
      placeholder: "+63"
  })    
  
  setSelect2({
      id: "#00N1y000002xjBZ",
      placeholder: "Type of Customer Request"
  })

  setSelect2({
      id: "#00N1y000002xjBE",
      placeholder: "Line of Business"
  })

  setSelect2({
      id: "#industry",
      placeholder: "Select Industry"
  })
  
  setSelect2({
      id: "#00N1s000000stPd",
      placeholder: "Sub-Industry"
  })
  
  setSelect2({
      id: "#00N2x000006cD07",
      placeholder: "Select Sub-Industry"
  })
  
  setSelect2({
      id: "#00N1s000000sjsG",
      placeholder: "Business Type"
  })
  
  setSelect2({
      id: "#00N1s000000stg0",
      placeholder: "Business Registration Type"
  })
  
  setSelect2({
      id: "#00N1s000000stgK",
      placeholder: "Company Size"
  })
  
  setSelect2({
      id: "#00N1s000000rHWO",
      placeholder: "Product Interest"
  })
  
  setSelect2({
      id: "#lead_source",
      placeholder: "Lead Source"
  })
  
  setSelect2({
      id: "#country",
      placeholder: "Country"
  })
})
