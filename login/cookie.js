function pp() {
    alert("pp");
}

const setCookie = (options) => {
    const {
      name,
      value = '',
      path = '/',
      duration = 3600,
    } = options;
    
    const durationMs = duration * 1000;
    const expires =
      new Date(Date.now() + durationMs);
  
    document.cookie = 
      `${name}=${escape(value)}; expires=${expires.toUTCString()}; path=${path}`;
  }
  
  const getCookie = (name, cast = String) => {
    if (document.cookie.length == 0)
      return;
  
    const match = document
      .cookie
      .match(`${name}=(?<value>[\\w]*);?`);
  
    if (!match)
      return;
  
    const value =
      match?.groups?.value ?? '';
  
    return cast(unescape(value));
  }
  
  const cookieExists = (name) => {
    return getCookie(name) !== undefined;
  }
  
  const deleteCookie = (name) => {
    setCookie({
      name: name,
      value: undefined,
      duration: -1,
    });
  }
  setCookie({
    name: 'val',
    value: 300000,
    duration: 300, // 300s, 5 minutes
  });
  document.set