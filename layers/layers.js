var format_mapmapPolygon0 = new ol.format.GeoJSON();
var features_mapmapPolygon0 = format_mapmapPolygon0.readFeatures(json_mapmapPolygon0, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_mapmapPolygon0 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_mapmapPolygon0.addFeatures(features_mapmapPolygon0);var lyr_mapmapPolygon0 = new ol.layer.Vector({
                source:jsonSource_mapmapPolygon0, 
                style: style_mapmapPolygon0,
                title: "map map Polygon"
            });var format_mapmapPoint1 = new ol.format.GeoJSON();
var features_mapmapPoint1 = format_mapmapPoint1.readFeatures(json_mapmapPoint1, 
            {dataProjection: 'EPSG:4326', featureProjection: 'EPSG:3857'});
var jsonSource_mapmapPoint1 = new ol.source.Vector({
    attributions: [new ol.Attribution({html: '<a href=""></a>'})],
});
jsonSource_mapmapPoint1.addFeatures(features_mapmapPoint1);var lyr_mapmapPoint1 = new ol.layer.Vector({
                source:jsonSource_mapmapPoint1, 
                style: style_mapmapPoint1,
                title: "map map Point"
            });

lyr_mapmapPolygon0.setVisible(true);lyr_mapmapPoint1.setVisible(true);
var layersList = [lyr_mapmapPolygon0,lyr_mapmapPoint1];
lyr_mapmapPolygon0.set('fieldAliases', {'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', 'code': 'code', 'name': 'name', 'level': 'level', 'parent': 'parent', 'parentGraph': 'parentGraph', 'groups': 'groups', });
lyr_mapmapPoint1.set('fieldAliases', {'Name': 'Name', 'description': 'description', 'timestamp': 'timestamp', 'begin': 'begin', 'end': 'end', 'altitudeMode': 'altitudeMode', 'tessellate': 'tessellate', 'extrude': 'extrude', 'visibility': 'visibility', 'drawOrder': 'drawOrder', 'icon': 'icon', 'code': 'code', 'name': 'name', 'level': 'level', 'parent': 'parent', 'parentGraph': 'parentGraph', 'groups': 'groups', });
lyr_mapmapPolygon0.set('fieldImages', {'Name': 'TextEdit', 'description': 'TextEdit', 'timestamp': 'TextEdit', 'begin': 'TextEdit', 'end': 'TextEdit', 'altitudeMode': 'TextEdit', 'tessellate': 'TextEdit', 'extrude': 'TextEdit', 'visibility': 'TextEdit', 'drawOrder': 'TextEdit', 'icon': 'TextEdit', 'code': 'TextEdit', 'name': 'TextEdit', 'level': 'TextEdit', 'parent': 'TextEdit', 'parentGraph': 'TextEdit', 'groups': 'TextEdit', });
lyr_mapmapPoint1.set('fieldImages', {'Name': 'TextEdit', 'description': 'TextEdit', 'timestamp': 'TextEdit', 'begin': 'TextEdit', 'end': 'TextEdit', 'altitudeMode': 'TextEdit', 'tessellate': 'TextEdit', 'extrude': 'TextEdit', 'visibility': 'TextEdit', 'drawOrder': 'TextEdit', 'icon': 'TextEdit', 'code': 'TextEdit', 'name': 'TextEdit', 'level': 'TextEdit', 'parent': 'TextEdit', 'parentGraph': 'TextEdit', 'groups': 'TextEdit', });
lyr_mapmapPolygon0.set('fieldLabels', {'Name': 'no label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', 'code': 'no label', 'name': 'no label', 'level': 'no label', 'parent': 'no label', 'parentGraph': 'no label', 'groups': 'no label', });
lyr_mapmapPoint1.set('fieldLabels', {'Name': 'header label', 'description': 'no label', 'timestamp': 'no label', 'begin': 'no label', 'end': 'no label', 'altitudeMode': 'no label', 'tessellate': 'no label', 'extrude': 'no label', 'visibility': 'no label', 'drawOrder': 'no label', 'icon': 'no label', 'code': 'no label', 'name': 'no label', 'level': 'no label', 'parent': 'no label', 'parentGraph': 'no label', 'groups': 'no label', });
lyr_mapmapPoint1.on('precompose', function(evt) {
    evt.context.globalCompositeOperation = 'normal';
});