// Generated by CoffeeScript 1.6.2
(function() {
  var define, require,
    _this = this,
    __slice = [].slice;

  require = this.require;

  define = this.define;

  if (!(define != null ? define.amd : void 0)) {
    define = function() {
      var args, fn, _i, _ref;

      args = 2 <= arguments.length ? __slice.call(arguments, 0, _i = arguments.length - 1) : (_i = 0, []), fn = arguments[_i++];
      return ((_ref = _this.gallerista) != null ? _ref : _this.gallerista = {}).utils = fn(function() {});
    };
  }

  define(function(require) {
    var Dict, Direction, Orientation, Units;

    Dict = (function() {
      Dict.uidCounter = 0;

      Dict.idKey = '__galleristaCarouselId';

      function Dict() {
        this.values = {};
        this.primativesMap = {};
      }

      Dict.prototype.set = function(key, value) {
        var id, _name, _ref;

        if (_.isObject(key)) {
          id = (_ref = key[_name = Dict.idKey]) != null ? _ref : key[_name] = (Dict.uidCounter += 1);
          return this.values[id] = value;
        } else {
          return this.primativesMap[key] = value;
        }
      };

      Dict.prototype.get = function(key) {
        if (_.isObject(key)) {
          return this.values[key[Dict.idKey]];
        } else {
          return this.primativesMap[key];
        }
      };

      Dict.prototype.del = function(key) {
        if (_.isObject(key)) {
          return delete this.values[key[Dict.idKey]];
        } else {
          return delete this.primativesMap[key];
        }
      };

      return Dict;

    })();
    Units = {
      PIXELS: 'px',
      PERCENTAGE: '%'
    };
    Direction = {
      NEAREST: 'nearest',
      FORWARD: 'forward',
      BACKWARD: 'backward'
    };
    Orientation = {
      HORIZONTAL: 'horizontal',
      VERTICAL: 'vertical'
    };
    return {
      Dict: Dict,
      Units: Units,
      Direction: Direction,
      Orientation: Orientation,
      mod: function(a, b) {
        return ((a % b) + b) % b;
      },
      determineNearestDirection: function(startIndex, endIndex, slideCount) {
        var direction, distanceBackward, distanceForward, targetBackward, targetForward;

        if (slideCount <= 2) {
          direction = Direction.FORWARD;
        } else {
          targetForward = (endIndex > startIndex ? endIndex : endIndex + slideCount);
          targetBackward = (endIndex < startIndex ? endIndex : endIndex - slideCount);
          distanceForward = targetForward - startIndex;
          distanceBackward = startIndex - targetBackward;
          if (distanceForward < distanceBackward) {
            direction = Direction.FORWARD;
          } else if (distanceBackward < distanceForward) {
            direction = Direction.BACKWARD;
          } else {
            direction = (startIndex > endIndex ? Direction.FORWARD : Direction.BACKWARD);
          }
        }
        return direction;
      }
    };
  });

}).call(this);