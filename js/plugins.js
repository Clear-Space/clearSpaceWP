! function(a, b) {
  "use strict";

  function c(a) {
    this.callback = a, this.ticking = !1
  }

  function d(b) {
    return b && "undefined" != typeof a && (b === a || b.nodeType)
  }

  function e(a) {
    if (arguments.length <= 0) throw new Error("Missing arguments in extend function");
    var b, c, f = a || {};
    for (c = 1; c < arguments.length; c++) {
      var g = arguments[c] || {};
      for (b in g) f[b] = "object" != typeof f[b] || d(f[b]) ? f[b] || g[b] : e(f[b], g[b])
    }
    return f
  }

  function f(a) {
    return a === Object(a) ? a : {
      down: a,
      up: a
    }
  }

  function g(a, b) {
    b = e(b, g.options), this.lastKnownScrollY = 0, this.elem = a, this.debouncer = new c(this.update.bind(this)), this.tolerance = f(b.tolerance), this.classes = b.classes, this.offset = b.offset, this.scroller = b.scroller, this.initialised = !1, this.onPin = b.onPin, this.onUnpin = b.onUnpin, this.onTop = b.onTop, this.onNotTop = b.onNotTop
  }
  var h = {
    bind: !! function() {}.bind,
    classList: "classList" in b.documentElement,
    rAF: !!(a.requestAnimationFrame || a.webkitRequestAnimationFrame || a.mozRequestAnimationFrame)
  };
  a.requestAnimationFrame = a.requestAnimationFrame || a.webkitRequestAnimationFrame || a.mozRequestAnimationFrame, c.prototype = {
    constructor: c,
    update: function() {
      this.callback && this.callback(), this.ticking = !1
    },
    requestTick: function() {
      this.ticking || (requestAnimationFrame(this.rafCallback || (this.rafCallback = this.update.bind(this))), this.ticking = !0)
    },
    handleEvent: function() {
      this.requestTick()
    }
  }, g.prototype = {
    constructor: g,
    init: function() {
      return g.cutsTheMustard ? (this.elem.classList.add(this.classes.initial), setTimeout(this.attachEvent.bind(this), 100), this) : void 0
    },
    destroy: function() {
      var a = this.classes;
      this.initialised = !1, this.elem.classList.remove(a.unpinned, a.pinned, a.top, a.initial), this.scroller.removeEventListener("scroll", this.debouncer, !1)
    },
    attachEvent: function() {
      this.initialised || (this.lastKnownScrollY = this.getScrollY(), this.initialised = !0, this.scroller.addEventListener("scroll", this.debouncer, !1), this.debouncer.handleEvent())
    },
    unpin: function() {
      var a = this.elem.classList,
        b = this.classes;
      (a.contains(b.pinned) || !a.contains(b.unpinned)) && (a.add(b.unpinned), a.remove(b.pinned), this.onUnpin && this.onUnpin.call(this))
    },
    pin: function() {
      var a = this.elem.classList,
        b = this.classes;
      a.contains(b.unpinned) && (a.remove(b.unpinned), a.add(b.pinned), this.onPin && this.onPin.call(this))
    },
    top: function() {
      var a = this.elem.classList,
        b = this.classes;
      a.contains(b.top) || (a.add(b.top), a.remove(b.notTop), this.onTop && this.onTop.call(this))
    },
    notTop: function() {
      var a = this.elem.classList,
        b = this.classes;
      a.contains(b.notTop) || (a.add(b.notTop), a.remove(b.top), this.onNotTop && this.onNotTop.call(this))
    },
    getScrollY: function() {
      return void 0 !== this.scroller.pageYOffset ? this.scroller.pageYOffset : void 0 !== this.scroller.scrollTop ? this.scroller.scrollTop : (b.documentElement || b.body.parentNode || b.body).scrollTop
    },
    getViewportHeight: function() {
      return a.innerHeight || b.documentElement.clientHeight || b.body.clientHeight
    },
    getDocumentHeight: function() {
      var a = b.body,
        c = b.documentElement;
      return Math.max(a.scrollHeight, c.scrollHeight, a.offsetHeight, c.offsetHeight, a.clientHeight, c.clientHeight)
    },
    getElementHeight: function(a) {
      return Math.max(a.scrollHeight, a.offsetHeight, a.clientHeight)
    },
    getScrollerHeight: function() {
      return this.scroller === a || this.scroller === b.body ? this.getDocumentHeight() : this.getElementHeight(this.scroller)
    },
    isOutOfBounds: function(a) {
      var b = 0 > a,
        c = a + this.getViewportHeight() > this.getScrollerHeight();
      return b || c
    },
    toleranceExceeded: function(a, b) {
      return Math.abs(a - this.lastKnownScrollY) >= this.tolerance[b]
    },
    shouldUnpin: function(a, b) {
      var c = a > this.lastKnownScrollY,
        d = a >= this.offset;
      return c && d && b
    },
    shouldPin: function(a, b) {
      var c = a < this.lastKnownScrollY,
        d = a <= this.offset;
      return c && b || d
    },
    update: function() {
      var a = this.getScrollY(),
        b = a > this.lastKnownScrollY ? "down" : "up",
        c = this.toleranceExceeded(a, b);
      this.isOutOfBounds(a) || (a <= this.offset ? this.top() : this.notTop(), this.shouldUnpin(a, c) ? this.unpin() : this.shouldPin(a, c) && this.pin(), this.lastKnownScrollY = a)
    }
  }, g.options = {
    tolerance: {
      up: 0,
      down: 0
    },
    offset: 0,
    scroller: a,
    classes: {
      pinned: "headroom--pinned",
      unpinned: "headroom--unpinned",
      top: "headroom--top",
      notTop: "headroom--not-top",
      initial: "headroom"
    }
  }, g.cutsTheMustard = "undefined" != typeof h && h.rAF && h.bind && h.classList, a.Headroom = g
}(window, document),
function() {
  var a = /\blang(?:uage)?-(?!\*)(\w+)\b/i,
    b = self.Prism = {
      util: {
        type: function(a) {
          return Object.prototype.toString.call(a).match(/\[object (\w+)\]/)[1]
        },
        clone: function(a) {
          var c = b.util.type(a);
          switch (c) {
            case "Object":
              var d = {};
              for (var e in a) a.hasOwnProperty(e) && (d[e] = b.util.clone(a[e]));
              return d;
            case "Array":
              return a.slice()
          }
          return a
        }
      },
      languages: {
        extend: function(a, c) {
          var d = b.util.clone(b.languages[a]);
          for (var e in c) d[e] = c[e];
          return d
        },
        insertBefore: function(a, c, d, e) {
          e = e || b.languages;
          var f = e[a],
            g = {};
          for (var h in f)
            if (f.hasOwnProperty(h)) {
              if (h == c)
                for (var i in d) d.hasOwnProperty(i) && (g[i] = d[i]);
              g[h] = f[h]
            }
          return e[a] = g
        },
        DFS: function(a, c) {
          for (var d in a) c.call(a, d, a[d]), "Object" === b.util.type(a) && b.languages.DFS(a[d], c)
        }
      },
      highlightAll: function(a, c) {
        for (var d, e = document.querySelectorAll('code[class*="language-"], [class*="language-"] code, code[class*="lang-"], [class*="lang-"] code'), f = 0; d = e[f++];) b.highlightElement(d, a === !0, c)
      },
      highlightElement: function(d, e, f) {
        for (var g, h, i = d; i && !a.test(i.className);) i = i.parentNode;
        if (i && (g = (i.className.match(a) || [, ""])[1], h = b.languages[g]), h) {
          d.className = d.className.replace(a, "").replace(/\s+/g, " ") + " language-" + g, i = d.parentNode, /pre/i.test(i.nodeName) && (i.className = i.className.replace(a, "").replace(/\s+/g, " ") + " language-" + g);
          var j = d.textContent;
          if (j) {
            j = j.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/\u00a0/g, " ");
            var k = {
              element: d,
              language: g,
              grammar: h,
              code: j
            };
            if (b.hooks.run("before-highlight", k), e && self.Worker) {
              var l = new Worker(b.filename);
              l.onmessage = function(a) {
                k.highlightedCode = c.stringify(JSON.parse(a.data), g), b.hooks.run("before-insert", k), k.element.innerHTML = k.highlightedCode, f && f.call(k.element), b.hooks.run("after-highlight", k)
              }, l.postMessage(JSON.stringify({
                language: k.language,
                code: k.code
              }))
            } else k.highlightedCode = b.highlight(k.code, k.grammar, k.language), b.hooks.run("before-insert", k), k.element.innerHTML = k.highlightedCode, f && f.call(d), b.hooks.run("after-highlight", k)
          }
        }
      },
      highlight: function(a, d, e) {
        return c.stringify(b.tokenize(a, d), e)
      },
      tokenize: function(a, c) {
        var d = b.Token,
          e = [a],
          f = c.rest;
        if (f) {
          for (var g in f) c[g] = f[g];
          delete c.rest
        }
        a: for (var g in c)
          if (c.hasOwnProperty(g) && c[g]) {
            var h = c[g],
              i = h.inside,
              j = !!h.lookbehind,
              k = 0;
            h = h.pattern || h;
            for (var l = 0; l < e.length; l++) {
              var m = e[l];
              if (e.length > a.length) break a;
              if (!(m instanceof d)) {
                h.lastIndex = 0;
                var n = h.exec(m);
                if (n) {
                  j && (k = n[1].length);
                  var o = n.index - 1 + k,
                    n = n[0].slice(k),
                    p = n.length,
                    q = o + p,
                    r = m.slice(0, o + 1),
                    s = m.slice(q + 1),
                    t = [l, 1];
                  r && t.push(r);
                  var u = new d(g, i ? b.tokenize(n, i) : n);
                  t.push(u), s && t.push(s), Array.prototype.splice.apply(e, t)
                }
              }
            }
          }
        return e
      },
      hooks: {
        all: {},
        add: function(a, c) {
          var d = b.hooks.all;
          d[a] = d[a] || [], d[a].push(c)
        },
        run: function(a, c) {
          var d = b.hooks.all[a];
          if (d && d.length)
            for (var e, f = 0; e = d[f++];) e(c)
        }
      }
    },
    c = b.Token = function(a, b) {
      this.type = a, this.content = b
    };
  if (c.stringify = function(a, d, e) {
      if ("string" == typeof a) return a;
      if ("[object Array]" == Object.prototype.toString.call(a)) return a.map(function(b) {
        return c.stringify(b, d, a)
      }).join("");
      var f = {
        type: a.type,
        content: c.stringify(a.content, d, e),
        tag: "span",
        classes: ["token", a.type],
        attributes: {},
        language: d,
        parent: e
      };
      "comment" == f.type && (f.attributes.spellcheck = "true"), b.hooks.run("wrap", f);
      var g = "";
      for (var h in f.attributes) g += h + '="' + (f.attributes[h] || "") + '"';
      return "<" + f.tag + ' class="' + f.classes.join(" ") + '" ' + g + ">" + f.content + "</" + f.tag + ">"
    }, !self.document) return self.addEventListener("message", function(a) {
    var c = JSON.parse(a.data),
      d = c.language,
      e = c.code;
    self.postMessage(JSON.stringify(b.tokenize(e, b.languages[d]))), self.close()
  }, !1), void 0;
  var d = document.getElementsByTagName("script");
  d = d[d.length - 1], d && (b.filename = d.src, document.addEventListener && !d.hasAttribute("data-manual") && document.addEventListener("DOMContentLoaded", b.highlightAll))
}(), Prism.languages.markup = {
    comment: /&lt;!--[\w\W]*?-->/g,
    prolog: /&lt;\?.+?\?>/,
    doctype: /&lt;!DOCTYPE.+?>/,
    cdata: /&lt;!\[CDATA\[[\w\W]*?]]>/i,
    tag: {
      pattern: /&lt;\/?[\w:-]+\s*(?:\s+[\w:-]+(?:=(?:("|')(\\?[\w\W])*?\1|\w+))?\s*)*\/?>/gi,
      inside: {
        tag: {
          pattern: /^&lt;\/?[\w:-]+/i,
          inside: {
            punctuation: /^&lt;\/?/,
            namespace: /^[\w-]+?:/
          }
        },
        "attr-value": {
          pattern: /=(?:('|")[\w\W]*?(\1)|[^\s>]+)/gi,
          inside: {
            punctuation: /=|>|"/g
          }
        },
        punctuation: /\/?>/g,
        "attr-name": {
          pattern: /[\w:-]+/g,
          inside: {
            namespace: /^[\w-]+?:/
          }
        }
      }
    },
    entity: /&amp;#?[\da-z]{1,8};/gi
  }, Prism.hooks.add("wrap", function(a) {
    "entity" === a.type && (a.attributes.title = a.content.replace(/&amp;/, "&"))
  }), Prism.languages.css = {
    comment: /\/\*[\w\W]*?\*\//g,
    atrule: {
      pattern: /@[\w-]+?.*?(;|(?=\s*{))/gi,
      inside: {
        punctuation: /[;:]/g
      }
    },
    url: /url\((["']?).*?\1\)/gi,
    selector: /[^\{\}\s][^\{\};]*(?=\s*\{)/g,
    property: /(\b|\B)[\w-]+(?=\s*:)/gi,
    string: /("|')(\\?.)*?\1/g,
    important: /\B!important\b/gi,
    ignore: /&(lt|gt|amp);/gi,
    punctuation: /[\{\};:]/g
  }, Prism.languages.markup && Prism.languages.insertBefore("markup", "tag", {
    style: {
      pattern: /(&lt;|<)style[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/style(>|&gt;)/gi,
      inside: {
        tag: {
          pattern: /(&lt;|<)style[\w\W]*?(>|&gt;)|(&lt;|<)\/style(>|&gt;)/gi,
          inside: Prism.languages.markup.tag.inside
        },
        rest: Prism.languages.css
      }
    }
  }), Prism.languages.clike = {
    comment: {
      pattern: /(^|[^\\])(\/\*[\w\W]*?\*\/|(^|[^:])\/\/.*?(\r?\n|$))/g,
      lookbehind: !0
    },
    string: /("|')(\\?.)*?\1/g,
    "class-name": {
      pattern: /((?:(?:class|interface|extends|implements|trait|instanceof|new)\s+)|(?:catch\s+\())[a-z0-9_\.\\]+/gi,
      lookbehind: !0,
      inside: {
        punctuation: /(\.|\\)/
      }
    },
    keyword: /\b(if|else|while|do|for|return|in|instanceof|function|new|try|throw|catch|finally|null|break|continue)\b/g,
    "boolean": /\b(true|false)\b/g,
    "function": {
      pattern: /[a-z0-9_]+\(/gi,
      inside: {
        punctuation: /\(/
      }
    },
    number: /\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee]-?\d+)?)\b/g,
    operator: /[-+]{1,2}|!|&lt;=?|>=?|={1,3}|(&amp;){1,2}|\|?\||\?|\*|\/|\~|\^|\%/g,
    ignore: /&(lt|gt|amp);/gi,
    punctuation: /[{}[\];(),.:]/g
  }, Prism.languages.javascript = Prism.languages.extend("clike", {
    keyword: /\b(var|let|if|else|while|do|for|return|in|instanceof|function|new|with|typeof|try|throw|catch|finally|null|break|continue)\b/g,
    number: /\b-?(0x[\dA-Fa-f]+|\d*\.?\d+([Ee]-?\d+)?|NaN|-?Infinity)\b/g
  }), Prism.languages.insertBefore("javascript", "keyword", {
    regex: {
      pattern: /(^|[^/])\/(?!\/)(\[.+?]|\\.|[^/\r\n])+\/[gim]{0,3}(?=\s*($|[\r\n,.;})]))/g,
      lookbehind: !0
    }
  }), Prism.languages.markup && Prism.languages.insertBefore("markup", "tag", {
    script: {
      pattern: /(&lt;|<)script[\w\W]*?(>|&gt;)[\w\W]*?(&lt;|<)\/script(>|&gt;)/gi,
      inside: {
        tag: {
          pattern: /(&lt;|<)script[\w\W]*?(>|&gt;)|(&lt;|<)\/script(>|&gt;)/gi,
          inside: Prism.languages.markup.tag.inside
        },
        rest: Prism.languages.javascript
      }
    }
  }),
  function() {
    function a(a) {
      this.strategies = a
    }
    a.prototype = {
      constructor: a,
      init: function() {
        this.elements = document.querySelectorAll("[data-code-generator]")
      },
      generate: function(a) {
        var b = this;
        [].forEach.call(this.elements, function(c) {
          b.highlightElement(c, a)
        })
      },
      getStrategy: function(a) {
        return this.strategies[a.getAttribute("data-code-generator")]
      },
      highlightElement: function(a, b) {
        var c = this.getStrategy(a),
          d = a.querySelector("code");
        c && (d.innerHTML = c(b), Prism.highlightElement(d, !1))
      }
    }, window.CodeGenerator = a
  }(),
  function(a) {
    function b(a) {
      return JSON.stringify({
        offset: a.offset,
        tolerance: a.tolerance,
        classes: {
          initial: a.classes.initial,
          pinned: a.classes.pinned,
          unpinned: a.classes.unpinned
        }
      }, null, "  ")
    }

    function c(a, b, c) {
      this.form = a, this.codeGenerator = b, this.getOptions = c
    }
    c.prototype = {
      constructor: c,
      init: function() {
        var a = this.form;
        return a && (this.codeGenerator.init(), this.process(), a.addEventListener("change", this, !1)), this
      },
      process: function() {
        var b = this.getOptions(this.form);
        this.headroom && this.headroom.destroy(), this.headroom = new Headroom(a.querySelector("header"), b).init(), this.codeGenerator.generate(b)
      },
      handleEvent: function() {
        this.process()
      },
      destroy: function() {
        this.form.removeEventListener("change", this)
      }
    };
    var d = {
      widget: function(a) {
        return "var headroom = new Headroom(elem, " + b(a) + ");\nheadroom.init();\n\n" + "// to destroy\n" + "headroom.destroy();"
      },
      plugin: function(a) {
        return '$("header").headroom(' + b(a) + ");\n\n" + "// to destroy\n" + '$("#header").headroom("destroy");'
      },
      dataApi: function(a) {
        return '&lt;header data-headroom data-tolerance="' + a.tolerance + '" ' + 'data-offset="' + a.offset + '" ' + "data-classes='" + JSON.stringify(a.classes) + "'&gt;&lt;/header&gt;\n\n" + "// to destroy, in your JS:\n" + '$("header").data("headroom").destroy();'
      },
      angular: function(a) {
        return '&lt;headroom tolerance="' + a.tolerance + '" ' + 'offset="' + a.offset + '" ' + "classes='" + JSON.stringify(a.classes) + "'&gt;&lt;/headroom&gt;"
      }
    };
    new c(a.querySelector("form"), new CodeGenerator(d), function(a) {
      for (var b, c = a.querySelectorAll("[name=classes]"), d = c.length - 1; d >= 0; d--)
        if (c[d].checked) {
          b = JSON.parse(c[d].value);
          break
        }
      return {
        tolerance: a.querySelector("#tolerance").valueAsNumber,
        offset: a.querySelector("#offset").valueAsNumber,
        classes: b
      }
    }).init()
  }(document);

     (function() {
    var header = new Headroom(document.querySelector(".logoAndNav"), {
      tolerance: 2,
      offset: 100,
      classes: {
        initial: "animated",
        pinned: "slideDown",
        unpinned: "slideUp"
      }
    });
    header.init();


}());
