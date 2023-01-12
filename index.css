/*Script para hacer cambiar de tamaño el mapa */
class ImageResize {
    /*MEtodo constructor con los atributos de la imagen*/
    constructor(config){
        const{ width, height, element } = config;
        this.imageW = width;
        this.imageH = height;
        this.imageMap = document.querySelector(element);
        const mapId = this.imageMap.getAttribute('usemap');
        const mapElem = `map[name="${mapId.substring(1, mapId.length)}"]`;
        const area = document.querySelector(mapElem).children;
        this.areaArray = Array.from(area);
        window.addEventListener('resize', this.resizeEvent);
        setTimeout(this.imgMap, 500);
    }
    /*Funcion para obtener las coordenadas del mapa */
    getCoordinates = (elem) => {
        let areaCords = elem.dataset.coords;
    
        if (!areaCords) {
          areaCords = elem.getAttribute('coords');
    
          elem.dataset.coords = areaCords;
        }
    
        return areaCords;
    };
    /*Funcion para calcular las proporciones de la imagen */
    imgMap = () => {
        this.wPercent = this.imageMap.offsetWidth / 100;
        this.hPercent = this.imageMap.offsetHeight / 100;
    
        this.areaArray.forEach(this.areaLoop);
      };
    /*Funcion para obtener las coordenadas especificadas del mapa y agregarlo a un arreglo */
    areaLoop = (area) => {
        const coordinates = this.getCoordinates(area).split(',');
        const coordsPercent = coordinates.map(this.mapCoords).join();
    
        area.setAttribute('coords', coordsPercent);
    };
    /*Funcion para obtener las nuevas coordenadas basadas en el nuevo tamanio de la imagen */
    mapCoords = (coordinate, index) => {
        const parseCord = parseInt(coordinate, 10);
    
        return index % 2 === 0
          ? this.coordinatesMath(parseCord, this.imageW, this.wPercent)
          : this.coordinatesMath(parseCord, this.imageH, this.hPercent);
    };
    /*Funcion para establecer las nuevas coordenadas de la imagen original */
    coordinatesMath = (coordinates, imgVal, percentVal) =>
        (coordinates / imgVal) * 100 * percentVal;

    /*Cambio de tamanio de la imagen */
    resizeEvent = () => {
        this.imgMap();
    };
}
/*Llamada a la funcion para reescalar la imagen */
const resizeImg = new ImageResize({
    width: 192,
    height: 59,
    element : '#map'
    })
